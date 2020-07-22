<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;


class ProductController extends Controller
{
    public function index($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->get();

        return view('product.index', ['products' => $products]);
    }



    public function show($productId)
    {
        $product = Product::find($productId);
        return view('product.show')->with('product', $product);
    }



}
