<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('toko.index');
    }

    public function about()
    {
        return view('toko.about');
    }

    public function service()
    {
        return view('toko.service');
    }

    public function search()
    {   
        $products = Product::latest();
        if(request('search')) {
            $products->where('name', 'like', '%' . request('search') . '%');
        }
        return view('toko.menu');
        
    }

    public function menu()
{
    $coffeeProducts = Product::where('type_id', 2)->latest();
    $snackProducts = Product::where('type_id', 1)->latest();

    if (request('search')) {
        $coffeeProducts->where('name', 'like', '%' . request('search') . '%');
        $snackProducts->where('name', 'like', '%' . request('search') . '%');
    }

    $coffeeProducts = $coffeeProducts->get();
    $snackProducts = $snackProducts->get();

    return view('toko.menu', compact('coffeeProducts', 'snackProducts'));
}


    public function contact()
    {
        return view('toko.contact');
    }

    public function testimonial()
    {
        return view('toko.testimonial');
    }

    public function reservation()
    {
        return view('toko.reservation');
    }

    public function loker()
    {
        return view('toko.loker');
    }

    public function detail($productId)
    {
        // Mengambil informasi produk dari database berdasarkan $productId
        $product = Product::find($productId);
    
        // Mengirim variabel $product ke view detail.blade.php
        return view('toko.detail', ['product' => $product]);
    }
    

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function resetPassword()
    {
        return view('auth.passwords.reset');
    }

    public function keranjang()
    {
        $orders = Order::all(); 
        return view('toko.keranjang', compact('orders'));
    }

    public function store(Request $request) 
     { 
         $request->validate([ 
             'name' => 'required|unique:types|min:5|alpha_space', 
             'code' => 'required', 
             'date' => 'required',
             'user' => 'required',
             'product' => 'required',
             'qty' => 'required',
             'price' => 'required'
         ],[ 
        
         ]); 
  
         Order::create($request->all()); 
  
         return redirect()->route('admin.category')->with('success', 'category created successfully.'); 
     }
}
