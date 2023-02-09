<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\HeaderTransaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function history()
    {
        $data = HeaderTransaction::where('UserID', auth()->id())->get();
        // dd($data->all());
        return view('user.history', [
            'title' => 'History',
            'products' => $data->all(),
        ]);
    }

    public function checkout($totalprice)
    {
        $data = Cart::all();
        // dd($data);
        $headerTransaction = HeaderTransaction::create([
            'UserID' => Auth::user()->UserID,
            'totalprice' => $totalprice,
        ]);
        //store to
        foreach ($data as $item) {
            $transactionDetail = new TransactionDetail();
            $product = Product::where('ProductID', $item->ProductID)->first();
            $product->save();
            // dd($product);
            $transactionDetail->HeaderTransactionID = $headerTransaction->HeaderTransactionID;
            $transactionDetail->ProductID = $item->ProductID;
            $transactionDetail->quantity = $item->quantity;
            $transactionDetail->subtotal = $item->totalprice;
            $transactionDetail->save();
        }
        Cart::truncate();
        return redirect(route('cart'))->with('checkout', 'Checkout success! We Will Contact You 1 x 24 Hours.');
    }
}
