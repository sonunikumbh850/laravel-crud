<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('products.index', ['products' => $products]);
    }


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'images' => 'required|image|mimes:jpg,jpeg,png,webp|max:20048',
        ]);

        // Upload image
        $ImageName = time() . '.' . $request->images->extension();
        $request->images->move(public_path('images'), $ImageName);

        // Save product
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->images = $ImageName;
        $product->save();

        // return redirect()->route('Products.index');
        return back()->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);

    }

    public function update(Request $request, $id)
    {
        // Validate
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;

        // Check if new image is uploaded
        if ($request->hasFile('images')) {
            // Upload new image
            $ImageName = time() . '.' . $request->images->extension();
            $request->images->move(public_path('images'), $ImageName);
            $product->images = $ImageName;
        }

        $product->save();

        return back()->with('success', 'Product updated successfully!');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return back()->with('success', 'Product deleted successfully!');
    }
}