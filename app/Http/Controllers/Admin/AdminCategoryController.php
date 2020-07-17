<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create(Request $request)
    {
  
        return view('admin.category.form');
    }

    public function store(Request $request)
    {
        Category::create([
            'title' => $request->input('nameCategory'),
            'parent_id' => $request->input('childCategory')
        ]);

        return redirect()->back();
    }
}
