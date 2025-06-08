<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // نمایش لیست محصولات
    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    // نمایش فرم ایجاد محصول جدید
    public function create()
    {
        $categories = Category::all(); // دریافت لیست دسته‌بندی‌ها از دیتابیس
        return view('admin.creatProduct', compact('categories')); // ارسال به ویو
        //return view('admin.creatProduct');
    }

    // ذخیره محصول جدید
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|max:2048',
            'category_id' => 'nullable|exists:categories,id' // بررسی اینکه مقدار درست باشد
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('products', 'public') : null;

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imagePath,
            'category_id' => $request->category_id // مقداردهی دسته‌بندی
        ]);

        return redirect()->route('products.index')->with('success', 'محصول با موفقیت اضافه شد.');
    }


    // نمایش فرم ویرایش محصول
    public function edit(Product $product)
    {
        return view('admin.editeProduct', compact('product'));
    }

    // بروزرسانی اطلاعات محصول
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|max:2048'
        ]);

        $imagePath = $product->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imagePath
        ]);

        return redirect()->route('products.index')->with('success', 'محصول با موفقیت بروزرسانی شد.');
    }

    // حذف محصول
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();
        return redirect()->route('products.index')->with('success', 'محصول با موفقیت حذف شد.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); // دریافت محصول بر اساس ID

        return view('product_detail', compact('product'));
    }


 
}
