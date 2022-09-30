<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductStockRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductStock;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $brands = Brand::all();

        return view('products.form', compact('brands'));
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());

        for ($i = 1; $i <= 5; $i++) {
            if($request->hasFile("image_$i")) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $request->file("image_$i")->store('images/products', 'public'),
                ]);
            }
        }

        session()->flash('message', 'Product created successfully.');

        return redirect()->route('products.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['product'] = Product::with('images')->findOrFail($id);
        $data['brands'] = Brand::all();

        return view('products.form', $data);
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        for ($i = 1; $i <= 5; $i++) {
            if($request->hasFile("image_$i")) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $request->file("image_$i")->store('images/products', 'public'),
                ]);
            }
        }

        session()->flash('message', 'Product updated successfully.');


        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $images = ProductImage::whereProductId($id)->get();
        foreach ($images as $image) {
            \Storage::disk('public')->delete($image->image);
            $image->delete();
        }
        $product->delete();

        session()->flash('message', 'Product deleted successfully.');

        return redirect()->route('products.index');
    }

    public function deleteImage($id){
        $image = ProductImage::findOrFail($id);
        if ($image->image) {
            \Storage::disk('public')->delete($image->image);
        }
        $image->delete();

        session()->flash('message', 'Image deleted successfully.');

        return redirect()->route('products.edit', $image->product_id);
    }

    public function stocks($id)
    {
        $stocks = ProductStock::whereProductId($id)->get();

        return view('products.stock-index', [
            'stocks' => $stocks,
            'product' => Product::findOrFail($id),
        ]);
    }

    public function stocksCreate($id)
    {
        return view('products.stock-form', compact('id'));
    }

    public function stocksStore(ProductStockRequest $request, $id)
    {
        $request->request->add(['product_id' => $id]);
        ProductStock::create($request->all());

        session()->flash('message', 'Product created successfully.');

        return redirect()->route('products.stocks', $id);
    }

    public function stocksEdit($id){
        $stock = ProductStock::findOrFail($id);

        return view('products.stock-form', compact('stock'));
    }

    public function stocksUpdate(ProductStockRequest $request, $id)
    {
        $stock = ProductStock::findOrFail($id);
        $stock->update($request->all());

        session()->flash('message', 'Product updated successfully.');

        return redirect()->route('products.stocks', $stock->product_id);
    }

    public function stocksDestroy($id)
    {
        $stock = ProductStock::findOrFail($id);
        $stock->delete();

        session()->flash('message', 'Product deleted successfully.');

        return redirect()->route('products.stocks', $stock->product_id);
    }
}
