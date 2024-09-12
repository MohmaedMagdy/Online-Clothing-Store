<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class AuthPost extends Controller
{
    public function create()
    {
        $shop = register::all();
        return view('User.auth', compact('shop'));
    }

    public function welcome(){
        return view('User.welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:registers,email'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'string', 'confirmed','min:8'],
        ]);

        register::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password), 
        ]);

      
        return redirect('/welcome');

      
    }
}
