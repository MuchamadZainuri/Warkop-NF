<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarkopController;
use App\Http\Controllers\HomeController;
use Spatie\Permission\Contracts\Role;

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

Route::middleware(['auth','role:admin'])->name('admin.')->prefix('admin')->group(function() {


        Route::get(
            '/orders',
            [WarkopController::class, 'orders']
        )->name('order');

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

});


    
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


    // 


    Route::get('/menu/search',[WarkopController::class, 'search']);
    
Auth::routes();

    