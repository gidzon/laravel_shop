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

    public function create()
    {

        return view('admin.category.form');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->nameCategory;
        $category->parent_id = $request->childCategory;
        $category->save();

        return redirect()->back();
    }
}
