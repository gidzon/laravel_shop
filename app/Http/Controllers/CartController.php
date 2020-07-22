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

        // Considers the total amount of all goods
        if (!$request->session()->has('productSumm')) {
            session(['productSumm' => $productSumm]);
            $totalAmount = $productSumm;
        } else {
            $summProductOld = $request->session()->get('productSumm');
            $newProductSumm = $summProductOld + $productSumm;
            $request->session()->push(['productSumm' => $newProductSumm]);

            $totalAmount = $newProductSumm;
        }

        $cartProduct = Cart::where('name_product', $product->name)->get();
        if (empty($cartProduct)) {
            Cart::create([
                'name_product' => $product->name,
                'price' => $product->price,
                'product_summ' => $productSumm,
                'amount' => $request->amount,
                'total_amount_summ' => $totalAmount
            ]);
        } else {
            $cartProduct->total_amount_summ = $totalAmount;
            $cartProduct->save();
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


