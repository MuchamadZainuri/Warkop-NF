<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('product.detail', compact('product'));
    }

    public function create()
    {
        $categories = Type::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => ['required','min:7','unique:products', 'regex:/^(?=.*[A-Z])(?=.*[0-9])[A-Z0-9]+$/', 'alpha_num'],
            'name' => ['required','unique:products', 'alpha_space', 'min:5'],
            'price' => 'required|min:4',
            'stok' => 'required',
            'note' => 'required|min:25',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type_id' => 'required',
        ],[
            'code.required' => 'Code tidak boleh kosong',
            'code.min' => 'Code minimal 7 karakter',
            'code.unique' => 'Code sudah ada',
            'code.regex' => 'Code harus terdiri dari combinasi huruf kapital dan angka',
            'code.alpha_num' => 'Code harus berupa angka dan huruf',
            'name.required' => 'Nama tidak boleh kosong',
            'name.unique' => 'Nama sudah ada',
            'name.alpha_space' => 'Nama harus berupa huruf',
            'name.min' => 'Nama minimal 5 karakter',
            'price.required' => 'Harga tidak boleh kosong',
            'price.min' => 'Harga minimal 4 digit',
            'stok.required' => 'Stok tidak boleh kosong',
            'note.required' => 'Note tidak boleh kosong',
            'img.required' => 'Gambar tidak boleh kosong',
            'img.image' => 'Gambar harus berupa gambar',
            'img.mimes' => 'Gambar harus berupa jpeg,png,jpg,gif,svg',
            'img.max' => 'Gambar maksimal 2048',
            'type_id.required' => 'Kategori tidak boleh kosong',
        ]);

        Product::create($request->all());

        return redirect()->route('admin.product')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $types = Type::all();
        return view('product.edit', compact('products', 'types'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => ['required', 'min:7', 'regex:/^(?=.*[A-Z])(?=.*[0-9])[A-Z0-9]+$/', 'alpha_num',
            Rule::unique('products')->ignore($id)],
            'name' => ['required',
            Rule::unique('products')->ignore($id), 'alpha_space', 'min:5'],
            'price' => 'required|min:4',
            'stok' => 'required',
            'note' => 'required|min:25',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type_id' => 'required',
        ], [
            'code.required' => 'Code tidak boleh kosong',
            'code.min' => 'Code minimal 7 karakter',
            'code.unique' => 'Code sudah ada',
            'code.regex' => 'Code harus terdiri dari combinasi huruf kapital dan angka',
            'code.alpha_num' => 'Code harus berupa angka dan huruf',
            'name.required' => 'Nama tidak boleh kosong',
            'name.unique' => 'Nama sudah ada',
            'name.alpha_space' => 'Nama harus berupa huruf',
            'name.min' => 'Nama minimal 5 karakter',
            'price.required' => 'Harga tidak boleh kosong',
            'price.min' => 'Harga minimal 4 digit',
            'stok.required' => 'Stok tidak boleh kosong',
            'note.required' => 'Note tidak boleh kosong',
            'img.required' => 'Gambar tidak boleh kosong',
            'img.image' => 'Gambar harus berupa gambar',
            'img.mimes' => 'Gambar harus berupa jpeg,png,jpg,gif,svg',
            'img.max' => 'Gambar maksimal 2048',
            'type_id.required' => 'Kategori tidak boleh kosong',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('admin.product')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.product')->with('success', 'Product deleted successfully.');
    }
}
