@extends('layouts.app')

@section('content')
<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form action="{{ route('layouts-shop') }}" method="post">
                @csrf
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($cart->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center">Your cart is empty.</td>
                                </tr>
                            @else
                                @foreach($cart as $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            @if($item->product)
                                                <img src="{{ asset('images/' . $item->product->image) }}" alt="Image" class="img-fluid">
                                            @else
                                                <p>No image available</p>
                                            @endif
                                        </td>
                                        <td class="product-name">
                                            @if($item->product)
                                                <h2 class="h5 text-black">{{ $item->product->name }}</h2>
                                            @else
                                                <p>No product name available</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if($item->product)
                                                {{ $item->product->price }}
                                            @else
                                                <p>No price available</p>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                                </div>
                                                <input type="text" class="form-control text-center quantity-amount" name="quantity[{{ $item->product ? $item->product->id : '' }}]" value="{{ $item->quantity }}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if($item->product)
                                                {{ $item->product->price * $item->quantity }}
                                            @else
                                                <p>No total available</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if($item->product)
                                                <form action="{{ route('cart.remove', $item->product->id) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-black btn-sm">X</button>
                                                </form>
                                            @else
                                                <p>No action available</p>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                {{-- <button class="btn btn-black btn-sm btn-block" type="submit">Update Cart</button> --}}
            </form>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                        {{-- <a href="{{ route('shop.index') }}" class="btn btn-black btn-sm btn-block">Continue Shopping</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black">Subtotal</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">${{ $cart->sum(function($item) { return $item->product->price * $item->quantity; }) }}</strong>
                            </div>
                        </div> --}}
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <span class="text-black">Total</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">${{ $cart->sum(function($item) { return $item->product ? $item->product->price * $item->quantity : 0; }) }}</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('checkout.index') }}" class="btn btn-black btn-lg py-3 btn-block">Proceed To Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
