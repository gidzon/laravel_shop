<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index')->with('carts', Cart::get());
    }

    public function store(Request $request,  $productId)
    {
        $product = Product::find($productId);
        $productSumm = $product->price * $request->amount;

        $cart = Cart::where('name_product', $product->name)->first();

        if (!isset($cart)) {
            Cart::create([
                'name_product' => $product->name,
                'price' => $product->price,
                'product_summ' => $productSumm,
                'amount' => $amount,
                'total_amount_summ' => 1
            ]);
        } else {
            $summProductOld = $cart->product_summ;

            $newProductSumm = $summProductOld + $productSumm;
            $cart->product_summ = $newProductSumm;
            $amount = $cart->amount + $request->input('amount');
            $cart->amount = $amount;
            $cart->save();
        }


        return redirect()->back();


    }



    public function update(Request $request, Cart $cart)
    {
        $summ = $cart->product_summ * $request->input('product_summ');

        $cart->update([
            'product_summ' => $summ,
            'total_amount_summ' => $summ
        ]);

        return redirect()->route('cart.index');
    }

    public function destroy(Cart $cart)
    {
        $cart->destroy();
        return redirect()->route('cart.index');
    }
}


