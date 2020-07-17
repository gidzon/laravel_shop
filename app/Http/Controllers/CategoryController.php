<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;

class CategoryController extends Controller
{
	private $categories;
	
    public function index()
    {
        $this->categories = Category::with('children')->where('parent_id', 0)->get();
        return view('category.index')->with('categories', $this->categories);
        
    }

    
    public function scopeOfSort($query, $sort)
    {
        foreach ($sort as $column => $direction) {
            $query->orderBy($column, $direction);
        }

        return $query;
    }

    public function (Request $request)
    {
        return view('admin.category.form');
    }
    
}