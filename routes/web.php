<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\SearchController;
// Route::get('/test',function (){
//     return view('orders');
// });
Route::get('/home', [PageController::class, 'index'])->name('home.index');
Route::get('/', [PageController::class, 'index'])->name('home.index');



// Route::get('/home',[CategoryController::class, 'showcategory']);

Route::get('/loginusers', [AuthController::class, 'showLoginUser'])->name('showLoginUsers');
Route::post('/loginusers', [AuthController::class, 'doLoginusers'])->name('loginUser');


Route::get('/registerusers', [AuthController::class, 'showRegiste'])->name('showRegister');
Route::post('/registerusers', [AuthController::class, 'storeUsers'])->name('register');

Route::get('/logoutusers', [AuthController::class, 'logoutusers'])->name('logoutuser');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Route::post('/search', [SearchController::class, 'search'])->name('search');

// ----------------------------------------------------------------------------------------------



Route::get('dashbord', function () {
    return view('admin.dashbord');
});
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('showlogin');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::middleware(['auth', IsAdmin::class])->group(function () {
    // نمایش لیست کاربران
    Route::get('/users', [DashboardController::class, 'index'])->name('users.index');

    // نمایش فرم ایجاد کاربر جدید
    Route::get('/users/create', [DashboardController::class, 'create'])->name('users.create');

    // ذخیره کاربر جدید در دیتابیس
    Route::post('/users', [DashboardController::class, 'store'])->name('users.store');

    // نمایش فرم ویرایش کاربر
    Route::get('/users/{user}/edit', [DashboardController::class, 'edit'])->name('users.edit');

    // بروزرسانی اطلاعات کاربر
    Route::put('/users/{user}', [DashboardController::class, 'update'])->name('users.update');

    // حذف کاربر
    Route::delete('/users/{user}', [DashboardController::class, 'destroy'])->name('users.destroy');
});




// نمایش لیست محصولات
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'index'])->name('products.index');

// نمایش فرم ایجاد محصول جدید
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// ذخیره محصول جدید در دیتابیس
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// نمایش فرم ویرایش محصول
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// بروزرسانی اطلاعات محصول
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// حذف محصول
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
