<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class SearchController extends Controller
{
     public function search(Request $request)
    {
        $query = $request->input('query');

        // جستجوی محصول با نام مشابه
        $products = Product::where('name', 'LIKE', "%{$query}%")->get();

        return view('search_results', compact('products', 'query'));
    }
}
