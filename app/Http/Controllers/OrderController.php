<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;

class OrderController extends Controller
{
    public function detail($id)
    {
        $order = Order::findOrFail($id);
        return view('order.detail', compact('order'));
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $product = Product::all();
        $user = User::all();
        return view('order.edit', compact('order', 'product', 'user'));
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

        return redirect()->route('admin.order')->with('success', 'Order updated successfully.');
    }

    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.order')->with('success', 'Order deleted successfully.');
    }
}
