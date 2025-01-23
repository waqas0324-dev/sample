<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(1);
        Auth::login($user);
        $cart = Cart::where('user_id', Auth::id())->with('product')->get();
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $cart = Cart::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $productId],
            ['quantity' => \DB::raw('quantity + 1')]
        );

        return redirect()->route('cart.index');
    }

    public function update(Request $request)
    {
        foreach ($request->quantity as $productId => $quantity) {
            $cart = Cart::where('user_id', Auth::id())->where('product_id', $productId)->first();
            if ($cart) {
                $cart->update(['quantity' => $quantity]);
            }
        }

        return redirect()->route('cart.index');
    }

    public function remove($productId)
    {
        $cart = Cart::where('user_id', Auth::id())->where('product_id', $productId)->first();
        if ($cart) {
            $cart->delete();
        }

        return redirect()->route('cart.index');
    }
}

