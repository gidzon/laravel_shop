<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    // public function store(Request $request)
    // {
    //     if(isset($request->submit) || $request->product) {
    //         $roles = [
    //             'name' => 'required',
    //             'price' => 'required',
    //             'desc' => 'required'
    //         ];
    
            
    //         $this->validate($request, $roles);
    
    //         if ($request->hasFile('img')) {
    //             $path = $request->img->store('img', 'public');
    
    //             $product = Product::create([
    //                 'name' => $request->name,
    //                 'price' => $request->price,
    //                 'desc' => $request->desc,
    //                 'img' => $path,
    //                 'category_id' => $request->input('category'),
    //             ]);
                
    //         }

    //         return redirect()->back();
    //     }

    //     if(isset($request->submit) || $request->category) {
    //         $this->validate($request->title, ['title' => 'required']);

    //         Category::create([
    //             'title' => $request->title, 
    //             'parent_id' => $request->categoryChildren
    //         ]);

    //         return redirect()->back();

    //     }
    // }
}
