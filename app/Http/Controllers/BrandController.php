<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $brands = Brand::all();

        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.form');
    }

    public function store(BrandRequest $request)
    {
        $brand = Brand::create($request->all());

        if ($request->hasFile('image')) {
            $brand->image = $request->file('image')->store('images/brands', 'public');
            $brand->save();
        }

        session()->flash('message', 'Brand created successfully.');

        return redirect()->route('brands.index')->with('success', 'Brand berhasil ditambahkan');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);

        return view('brands.form', compact('brand'));
    }

    public function update(BrandRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());

        if ($request->hasFile('image')) {
            $brand->image = $request->file('image')->store('images/brands', 'public');
            $brand->save();
        }

        return redirect()->route('brands.index')->with('success', 'Brand berhasil diubah');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        if ($brand->image) {
            \Storage::disk('public')->delete($brand->image);
        }
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Brand berhasil dihapus');
    }

    public function deleteImage($id){
        $brand = Brand::findOrFail($id);
        $brand->image = null;
        $brand->save();

        return redirect()->route('brands.edit', $id)->with('success', 'Gambar berhasil dihapus');
    }
}
