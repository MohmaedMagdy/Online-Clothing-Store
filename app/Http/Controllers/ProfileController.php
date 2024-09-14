<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\register; 

class ProfileController extends Controller
{
    public function show()
    {
        $user = register::latest()->first();
        return view('Profile.show', compact('user'));
    }


    public function show_update($id)
    {
        $data = register::findOrFail($id); 
        return view('Profile.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id, 
            'phone' => 'required|string|max:15',
            'password' => 'nullable|confirmed|min:8',
        ]);
    
        $user = register::findOrFail($id); 
    
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
    
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }
    
        $user->save(); 
    
        return redirect('/profile')->with('success', 'Profile updated successfully.');
    }

    public function destroy($id)
    {
         register::destroy($id);
        return redirect('/')->with('success', 'Profile deleted successfully.');
    }
  
}
