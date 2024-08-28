<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginmodel;
class logincontroller extends Controller
{
    public function logincreate()
    {
        $log = loginmodel::all();
        return view('Admin.login', compact('log'));
    }

    /**
     * Store a new admin user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'in:Admin@gmail.com'],
            'password' => ['required', 'string', 'min:9', 'confirmed', function ($attribute, $value, $fail) {
                if ($value !== '123456789') {
                    $fail('The ' . $attribute . ' must be 123456789.');
                }
            }],
        ]);
        
        loginmodel::create([
            'email' => $request->email,
            'password' => bcrypt($request->password), 
        ]);
        
        return redirect('/dashboard')->with('success', 'Welcome Admin!');
    }
}