<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        $product = Cart::paginate(3);
        return view('user.cart', [
            'title' => 'Cart',
            'products'=> $product,
            'count' => 0
        ]);
    }

    public function addToCart(Request $request, Product $product)
    {
        $user = User::where('UserID', Auth::user()->UserID)->first();
        $cart = Cart::where('ProductID', $product->ProductID)->first();
        if (!$cart) {
            Cart::create([
                'ProductID' => $product->ProductID,
                'quantity' => $request->quantity,
                'price' => $product->productprice,
                'totalprice' => $product->productprice * $request->quantity,
                'UserID' => $user//->UserID = Auth::user()->UserID
            ]);
        } else {
            $cart->quantity += $request->quantity;
            $cart->totalprice += $product->productprice * $request->quantity;
            $cart->save();
        }
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function removeFromCart(Cart $cart)
    {
        // dd($cart);
        $cart->delete();
        return redirect()->route('cart')->with('success', 'Product removed from cart successfully!');
    }


}
