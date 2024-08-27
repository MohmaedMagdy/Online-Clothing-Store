<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class AuthPost extends Controller
{
    public function create()
    {
        $shop = register::all();
        return view('auth', compact('shop'));
    }

    public function welcome(){
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:registers,email'],
            'phone' => ['required', 'string', 'max:15'],
            'password' => ['required', 'string', 'confirmed'],
        ]);

        register::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password), 
        ]);

      
        return redirect('/welcome')->with('success', 'Registration successful!');

      
    }
}
