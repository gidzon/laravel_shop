<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Model\Category;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {

        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        
        $roles = [
            'nameCategory' => 'required',
        ];
 
        
        $this->validate($request, $roles);

        $category = new Category;
        $category->title = $request->nameCategory;
        $category->parent_id = $request->childCategory;
        $category->save();

        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        

        return view('admin.category.edit', ['categoryId' => $id]);
    }

    public function update(Request $request, $id)
    {   
        $category = Category::find($id);
        if($request->filled('title')) {
            
            $category->title = $request->title;
            $category->save();
        }

        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {

        $category = Category::find($id);
        if($category->products) {
            foreach ($category->products as $product) {
                Storage::delete('storage/'.$product->img);
            }

            $category->products()->delete();
        }
        
         $category->delete();

        return redirect()->route('admin.index');
    }
}
