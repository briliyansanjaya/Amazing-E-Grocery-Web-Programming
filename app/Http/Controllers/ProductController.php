<?php

namespace App\Http\Controllers;

use App\Models\HeaderTransaction;
use App\Models\Product;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function home()
    {
        $product = Product::paginate(10);
        return view('pages.home', [
            'title' => 'Home',
            'products' => $product,
        ]);
    }

    public function showProductdetail(Product $products)
    {
        // dd($products);
        return view('pages.productdetail', [
            'title' => $products->name,
            'product' => $products,
        ]);
    }

    public function purchase(Request $request, Product $product)
    {
        $data = Product::where('ProductID', $product->ProductID)->get();
        // dd($product->ProductID);
        $headerTransaction = HeaderTransaction::create([
            'UserID' => Auth::user()->UserID,
            'totalprice' => $product->productprice * $request->quantity,
        ]);

        foreach($data as $item){
            $transactionDetail = new TransactionDetail();
            // $product = Product::where('ProductID', $item->ProductID)->first();
            // $product->save();
            $transactionDetail->HeaderTransactionID = $headerTransaction->HeaderTransactionID;
            $transactionDetail->ProductID = $item->ProductID;
            $transactionDetail->quantity = $request->quantity;
            $transactionDetail->subtotal = $item->productprice * $request->quantity;
            $transactionDetail->save();
        }
        return redirect()->back()->with('purchase', 'You Have Been Purchase This Product Successsfully!');
    }
}
