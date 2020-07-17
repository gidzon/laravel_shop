<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;

class HomePageController extends Controller
{
    public function index()
    {
        return view('shop.home');
    }
}
