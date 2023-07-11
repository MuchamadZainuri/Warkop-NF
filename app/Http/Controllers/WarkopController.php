<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use App\Models\User;
use App\Models\Supply;


class WarkopController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function orders()
    {
        $orders = Order::all();
        return view('admin.order', compact('orders'));
    }

    public function products()
    {
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    public function supply()
    {
        $supplys = Supply::all();
        return view('admin.supply', compact('supplys'));
    }

    public function categories()
    {
        $types = Type::all();
        return view('admin.categories', compact('types'));
    }
    
    // ini buat search fitur tapi belum berhasil//
    public function search(Request $request)
    {
        if($request->has('search')){
            $products = Product::where('nama','price','%'.$request->search.'%')->get();
        }
        else{
            $products = Product::all();
        }

        return view('menu',['products'=>$products]);
    }
}
