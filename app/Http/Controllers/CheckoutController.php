<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(1);
        Auth::login($user);
        $cart = Cart::where('user_id', operator: Auth::id())->with('product')->get();
        return view('checkout.index', compact('cart'));
    }

    public function placeOrder(Request $request)
    {
        // Handle order placement logic here

        // Clear the cart after placing the order
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('thankyou');
    }
}
