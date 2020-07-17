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
        return view('admin.product.form');
    }

    public function store(Request $request)
    {
        $roles = [
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required'
        ];


        $this->validate($request, $roles);

        if ($request->hasFile('img')) {
            $path = $request->img->store('img', 'public');

            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'desc' => $request->desc,
                'img' => $path,
                'category_id' => $request->input('category'),
            ]);

        } else {
            return redirect()->route('product.create');
        }


        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        return view('admin.product.show')->with('product', $product);
    }

    public function edit($warning = null)
    {
        return view('admin.product.edit', ['warning' => $warning]);
    }

    public function update(Request $request, Product $product, $imgPath)
    {
        $roles = [
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
        ];

        $this->validate($request, $roles);

        if ($request->hasFile('img')) {
            Storage::delete($imgPath);
            $path = $request->img->store('img', 'public');

            $product = Product::update([
                'name' => $request->name,
                'price' => $request->price,
                'desc' => $request->desc,
                'img' => $path,
            ]);

            return redirect()->route('product.admin.show')->with('product', $product);
        } else {
            $warning = 'Вы не выбрали изображение';
            return redirect()->route('product.admin.edit', ['warning' => $warning]);
        }

    }

    public function destroy(Request $request, Product $product)
    {
        $product->delete();
        return redirect()->route('product.admin.show');
    }
}
