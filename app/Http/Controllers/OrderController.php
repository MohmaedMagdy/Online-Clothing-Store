<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class OrderController extends Controller
{
    public function customerOrders()
    {
        $orders = order::all();
        return view('order', compact('orders'));
    }

    public function checkout()
    {

        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->back()->with('error', 'Your cart is empty! Please add products before checking out.');
        }


        return view('customer', compact('cart'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'payment' => 'required|string|in:credit_card,paypal,bank_transfer',
            'products.*.name' => 'required|string',
            'products.*.quantity' => 'required|integer|min:1',
            'products.*.total_price' => 'required|numeric|min:0',
            'products.*.photo' => 'nullable|string', 
        ]);

        if ($request->has('products') && is_array($request->products)) {
            foreach ($request->products as $product) {
                if (!empty($product['name']) && !empty($product['quantity']) && !empty($product['total_price'])) {
                    Order::create([
                        'client_name' => $request->client_name,
                        'product' => $product['name'],
                        'quantity' => $product['quantity'],
                        'total_price' => $product['total_price'],
                        'payment' => $request->payment,
                        'photo' => $product['photo']
                    ]);
                }
            }
        }

        return redirect('/thankyou')->with('success', 'Thank you for your order!');
    }

    public function showThankYouPage()
    {
        return view('thankyou');
    }
}
