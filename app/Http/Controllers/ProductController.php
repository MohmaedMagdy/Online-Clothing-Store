<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;
use App\Models\order;
use App\Models\order_item;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $product = item::all();
        return view('Admin.dashboard', compact('product'));
    }

    public function fqa(){
        return view('User.FQA');
    }

    public function prodcart()
    {
        return view('User.car');
    }
   

    public function add()
    {
        return view('Admin.addproduct');
    }

    public function man()
    {
        $men = item::where('category', 'men')->get();
        return view('Clothestype.mans', compact('men'));
    }
    public function woman()
    {
        $women = item::where('category', 'women')->get();
        return view('Clothestype.womans', compact('women'));
    }
    public function kides()
    {
        $children = item::where('category', 'children')->get();
        return view('Clothestype.kides', compact('children'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category' => 'required|string|in:men,women,children', 
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('product_images', 'public');
            $requestData['photo'] = '/storage/' . $imagePath;
        }

        item::create([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'photo' => $requestData['photo'] ?? null, 
        ]);

        return redirect('/dashboard')->with('success', 'Product added successfully!');
    }


    public function addProduct($id)
    {
        $product = item::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'photo' => $product->photo,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back();
    }


    public function update(Request $request)
    {
        $cart = session()->get('cart');

        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return redirect('/shopping');
    }


    public function delete(Request $request)
    {
        $cart = session()->get('cart');

        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }

        return redirect('/shopping');
    }
    
}
