<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarkopController;
use App\Http\Controllers\HomeController;
use Spatie\Permission\Contracts\Role;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// ROUTE AKSES HALAMAN

Route::get(
    'loker',
    [HomeController::class, 'loker']
)->name('toko.loker')->middleware('iscustomer');

Route::get(
    'detail',
    [HomeController::class, 'detail']
)->name('toko.detail')->middleware('iscustomer');

Route::get(
    'keranjang',
    [HomeController::class, 'keranjang']
)->name('toko.keranjang')->middleware('iscustomer');


Route::get(
    'admin',
    [WarkopController::class, 'admin']
)->name('admin.index')->middleware('isAdmin');

//ROUTE KHUSUS BACK END

Route::group(['middleware' => ['auth', 'role:admin']], function () {

    Route::prefix('admin')->name('admin.')->group(function () {

        Route::get(
            '/products',
            [WarkopController::class, 'products']
        )->name('product');

        Route::get(
            '/users',
            [WarkopController::class, 'users']
        )->name('user');

        Route::get(
            '/supply',
            [WarkopController::class, 'supply']
        )->name('supply');

        Route::get(
            '/categories',
            [WarkopController::class, 'categories']
        )->name('category');

        Route::get(
            '/orders',
            [WarkopController::class, 'orders']
        )->name('order');
    });

    Route::prefix('admin/orders')->name('order.')->group(function () {

        Route::get('/detail/{id}', [OrderController::class, 'detail'])->name('detail');
        Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [OrderController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [OrderController::class, 'delete'])->name('delete');
    });
    Route::prefix('admin/products')->name('product.')->group(function () {

        Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
    });
    Route::prefix('admin/categories')->name('category.')->group(function () {

        Route::post('store', [CategoriesController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [CategoriesController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [CategoriesController::class, 'delete'])->name('delete');
    });
    Route::prefix('admin/users')->name('user.')->group(function () {

        Route::get('/detail/{id}', [UserController::class, 'detail'])->name('detail');
        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete');
    });
    Route::prefix('admin/supply')->name('supply.')->group(function () {


        Route::get('create', [SupplyController::class, 'create'])->name('create');
        Route::post('store', [SupplyController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [SupplyController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [SupplyController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [SupplyController::class, 'delete'])->name('delete');
    });
});

//ROUTE KHUSUS FRONT END

Route::get(
    '/',
    [HomeController::class, 'index']
)->name('toko.index');

Route::get(
    'about',
    [HomeController::class, 'about']
)->name('toko.about');

Route::get(
    'service',
    [HomeController::class, 'service']
)->name('toko.service');

Route::get(
    'menu',
    [HomeController::class, 'menu']
)->name('toko.menu');

Route::get(
    'contact',
    [HomeController::class, 'contact']
)->name('toko.contact');

Route::get(
    'testimonial',
    [HomeController::class, 'testimonial']
)->name('toko.testimonial');

Route::get(
    'reservation',
    [HomeController::class, 'reservation']
)->name('toko.reservation');





Route::prefix('keranjang')->name('keranjang.')->group(function () {
    Route::get(
        '/',
        [HomeController::class, 'keranjang']
    )->name('index');
    Route::get(
        'detail/{id}',
        [HomeController::class, 'detail']
    )->name('detail');
    Route::post(
        'store',
        [HomeController::class, 'store']
    )->name('store');
    Route::get(
        'edit/{id}',
        [HomeController::class, 'edit']
    )->name('edit');
    Route::put(
        'update/{id}',
        [HomeController::class, 'update']
    )->name('update');
    Route::delete(
        'delete/{id}',
        [HomeController::class, 'delete']
    )->name('delete');
});



Route::get(
    '/menu/search',
    [WarkopController::class, 'search']
)->name('search');

Auth::routes();
