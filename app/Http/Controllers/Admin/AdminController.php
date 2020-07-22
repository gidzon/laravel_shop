<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.admin', ['products' => $products]);
    }


}
