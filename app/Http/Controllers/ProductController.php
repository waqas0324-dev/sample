<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.create_product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // dd("got here");
        $product = new Product();
        $product->Name = $request->name;
        $product->Price = $request->price;
        $product->save();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
            $product->save();
        }

        return redirect()->route('admin-adminhome');

    }


}


