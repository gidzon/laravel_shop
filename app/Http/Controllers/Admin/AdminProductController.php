<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Model\Product;
use App\Model\Category;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index')->with('products', Product::get());
    }
    public function create(Request $request)
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->flash();
        
       $roles = [
           'name' => 'required',
           'price' => 'required',
           'desc' => 'required',
           'img' => 'file|image'
       ];


       $this->validate($request, $roles);

        $path = $request->img->store('img', 'public');

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'img' => $path,
            'category_id' => $request->input('category'),
        ]);

        return redirect()->route('admin.index');
    }

    public function show(Product $product)
    {
        return view('admin.product.show')->with('product', $product);
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $roles = [
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
        ];

        $this->validate($request, $roles);

        Storage::disk('public')->delete($product->img);
        $path = $request->img->store('img', 'public');

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'category_id' => $request->category_id,
            'img' => $path,
        ]);
        return redirect()->route('admin.index');

    }

    public function destroy($id)
    {
        $product = Product::find($id);
        

        Storage::disk('public')->delete($product->img);
        $product->delete();
        return redirect()->route('admin.index');
    }
}
