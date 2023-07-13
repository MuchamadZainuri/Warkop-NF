<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function detail($id)
    {
        $user = User::findOrFail($id);
        return view('user.detail', compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users,email',
            'address' => 'required',
            'hp' => 'required',
            'password' => 'required',

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'hp' => $request->hp,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('admin');
        


        return redirect()->route('admin.user')->with('success', 'user created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users,email',
            'address' => 'required',
            'hp' => 'required',
            'password' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('admin.user')->with('success', 'user updated successfully.');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user')->with('success', 'user deleted successfully.');
    }
}

