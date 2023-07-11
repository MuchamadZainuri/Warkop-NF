<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function menu()
    {
        return view('toko.menu');
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

    public function detail()
    {
        return view('toko.detail');
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
        return view('toko.keranjang');
    }

}
