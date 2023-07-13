<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supply;
use App\Models\Product;
use App\Models\Supplier;

class SupplyController extends Controller
{

    public function create()
    {
        $product = Product::all();
        $supplier = Supplier::all();
        return view('supply.create', compact('product', 'supplier'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => ['required', 'min:7', 'unique:supplies', 'regex:/^(?=.*[A-Z])(?=.*[0-9])[A-Z0-9]+$/', 'alpha_num'],
            'date' => 'required',
            'supplier_id' => 'required',
            'product_id' => 'required',
            'qty' => 'required',
        ],[
            'code.required' => 'Code tidak boleh kosong',
            'code.min' => 'Code minimal 7 karakter',
            'code.unique' => 'Code sudah ada',
            'code.regex' => 'Code harus terdiri dari combinasi huruf kapital dan angka',
            'code.alpha_num' => 'Code harus berupa angka dan huruf',
            'date.required' => 'Tanggal tidak boleh kosong',
            'supplier.required' => 'Supplier tidak boleh kosong',
            'product.required' => 'Product tidak boleh kosong',
            'qty.required' => 'Qty tidak boleh kosong',
        ]);

        Supply::create($request->all());
        

        return redirect()->route('admin.supply')->with('success', 'supply created successfully.');
    }

    public function edit($id)
    {
        $supply = Supply::findOrFail($id);
        $product = Product::all();
        $supplier = Supplier::all();
        return view('supply.edit', compact('supply', 'product', 'supplier'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'date' => 'required',
            'supplier_id' => 'required',
            'product_id' => 'required',
            'qty' => 'required',
        ]);

        $supply = Supply::findOrFail($id);
        $supply->update($request->all());

        return redirect()->route('admin.supply')->with('success', 'supply updated successfully.');
    }

    public function delete($id)
    {
        $supply = Supply::findOrFail($id);
        $supply->delete();

        return redirect()->route('admin.supply')->with('success', 'supply deleted successfully.');
    }
}
