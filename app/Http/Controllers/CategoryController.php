<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showcategory()
    {
        $categories = Category::all();

        return view('product_detail', compact('categories'));
    }
}
