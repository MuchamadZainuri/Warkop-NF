<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarkopController;
use App\Http\Controllers\HomeController;

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



Route::prefix('/')->group(function(){

    Route::get('', function () {
        return view('toko.index');
    });
    Route::get('about', function () {
        return view('toko.about');
    });
    Route::get('service', function () {
        return view('toko.service');
    });
    Route::get('menu', function () {
        return view('toko.menu');
    });
    Route::get('contact', function () {
        return view('toko.contact');
    });
    Route::get('testimonial', function () {
        return view('toko.testimonial');
    });
    Route::get('reservation', function () {
        return view('toko.reservation');
    });
    Route::get('loker', function () {
        return view('toko.loker');
    });
    Route::get('detail', function () {
        return view('toko.detail');
    });

});

Route::prefix('admin')->group(function(){

    Route::get(
        '/', 
        [WarkopController::class, 'index']
    )->name('admin.index') ;

    Route::get(
        '/orders',
        [WarkopController::class, 'orders']
    )->name('admin.order');

    Route::get(
        '/products',
        [WarkopController::class, 'products']
    )->name('admin.product');
    
    Route::get(
        '/users',
        [WarkopController::class, 'users']
    )->name('admin.user');
    
    Route::get(
        '/supply',
        [WarkopController::class, 'supply']
    )->name('admin.supply');
    
    Route::get(
        '/categories',
        [WarkopController::class, 'categories']
    )->name('admin.category');



    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    