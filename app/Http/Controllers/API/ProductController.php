<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
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
}
