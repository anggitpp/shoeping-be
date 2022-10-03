<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function products(){
        $products = Product::get();

        foreach ($products as $product) {
            $product->image = $product->images()->first()->image;
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
}
