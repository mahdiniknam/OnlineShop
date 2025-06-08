<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
      public function getProducts()
    {
        $products = Product::all();
        return response()->json($products);
    }
}
