<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //This method will return latest products
    public function latestProducts()
    {
        $products = Product::orderBy('created_at', 'DESC')
            ->where('status', 1)
            ->limit(8)
            ->get();

        return response()->json([
            'status' => 200,
            'data' => $products
        ], 200);
    }
    //This method will return featured products
    public function featuredProducts()
    {
        $products = Product::orderBy('created_at', 'DESC')
            ->where('status', 1)
            ->where('is_featured', 1)
            ->limit(8)
            ->get();

        return response()->json([
            'status' => 200,
            'data' => $products
        ], 200);
    }
}
