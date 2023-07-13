<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

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
        if (request('search')) {
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
        'id' => 'required',
        'qty' => 'required|numeric|min:1',
    ]);

    $productId = $request->input('id');
    $quantity = $request->input('qty');

    $product = Product::findOrFail($productId);
    $code = $product->code;

    // Lakukan proses penyimpanan ke keranjang atau melakukan operasi lain yang sesuai dengan kebutuhan aplikasi.

    $order = new Order();
    $order->product_id = $productId;
    $order->qty = $quantity;
    $order->code = $code; // Assign nilai code dari produk ke order
    $order->date = now(); // Assign tanggal saat ini

    return redirect()->route('keranjang.index')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
}


    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $product = Product::all();
        $user = User::all();
        return view('toko/edit', compact('order', 'product', 'user'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'date' => 'required',
            'status' => 'required',
            'qty' => 'required',
            'note' => 'required',
            'product' => 'required',
            'user' => 'required',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('keranjang.update')->with('success', 'Order updated successfully.');
    }

    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('keranjang.index')->with('success', 'Order deleted successfully.');
    }
}
