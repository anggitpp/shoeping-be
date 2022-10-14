<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Promo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function products(){
        $products = Product::with('stocks')->get();

        foreach ($products as $product) {
            $product->image = $product->images->first()->image;
            $product->brand_name = $product->brand()->select('name')->value('name');
        }

        return response()->json([
            'message' => 'Successfully get products!',
            'data' => $products
        ]);
    }

    public function brands(){
        $brands = Brand::get();

        return response()->json([
            'message' => 'Successfully get brands!',
            'data' => $brands
        ]);
    }

    public function promos(){
        $promos = Promo::get();

        return response()->json([
            'message' => 'Successfully get promos!',
            'data' => $promos
        ]);
    }

    public function deleteWishlist(int $id){
        $user = auth()->user();
        $user->wishlists()->where('product_id', $id)->delete();

        return response()->json([
            'message' => 'Successfully delete wishlist!',
            'data' => $user->wishlists
        ]);
    }

    public function storeWishlist(int $id){
        $user = auth()->user();
        $user->wishlists()->create([
            'product_id' => $id
        ]);

        return response()->json([
            'message' => 'Successfully add wishlist!',
            'data' => $user->wishlists
        ]);
    }
}
