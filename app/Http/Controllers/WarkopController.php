<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarkopController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function orders()
    {
        return view('admin.order');
    }

    public function products()
    {
        return view('admin.product');
    }

    public function users()
    {
        return view('admin.user');
    }

    public function supply()
    {
        return view('admin.supply');
    }

    public function categories()
    {
        return view('admin.categories');
    }

}
