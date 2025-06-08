<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // دریافت دسته‌بندی‌ها
        $phones = Product::where('category_id', 1)->get();
        $laptops = Product::where('category_id', 2)->get();
        $lavazems = Product::where('category_id', 3)->get();
        $dorbins = Product::where('category_id', 4)->get();
        $watchs = Product::where('category_id', 5)->get();
        return view('home', compact('categories','phones', 'laptops', 'lavazems', 'dorbins', 'watchs'));
    }
}
