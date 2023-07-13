<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Validation\Rule;

class CategoriesController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:types|min:5|alpha_space',
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'name.unique' => 'Nama sudah ada',
            'name.min' => 'Nama minimal 5 karakter',
            'name.alpha_space' => 'Nama harus berupa huruf',
        ]);

        Type::create($request->all());

        return redirect()->route('admin.category')->with('success', 'category created successfully.');
    }

    public function edit($id)
    {
        $category = Type::findOrFail($id);
        return view('admin.category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required',
            'min:5',
            'alpha_space',
            Rule::unique('types')->ignore($id)],
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'name.min' => 'Nama minimal 5 karakter',
            'name.alpha_space' => 'Nama harus berupa huruf',
            'name.unique' => 'Nama sudah ada',
        ]);

        $category = Type::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('admin.category')->with('success', 'category updated successfully.');
    }

    public function delete($id)
    {
        $category = Type::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.category')->with('success', 'category deleted successfully.');
    }
}
