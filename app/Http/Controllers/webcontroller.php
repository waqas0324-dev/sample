<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class WebController extends Controller
{
    public function welcome(){return view('welcome');}
    // public function shop(){return view('shop');}
    public function home(){ return view('layouts.home'); }
    public function about(){return view('layouts.about'); }
    public function blog(){return view('layouts.blog'); }
    public function contact(){return view('layouts.contact'); }
    public function services(){return view('layouts.services');}
    public function shop(){

        $user = User::findOrFail(1);
        Auth::login($user);
        $cart = Cart::where('user_id', Auth::id())->with('product')->get();
        return view('layouts.shop', compact('cart'));

    }


    public function adminmaster(){ return view('admin.adminmaster');}
    public function adminhome()
    {
        # getting it from database
        $products = Product::all();

        return view('admin.adminhome', [
            'products' => $products
        ]);
    }


}

