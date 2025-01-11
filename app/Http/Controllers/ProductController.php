<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ApparelSize;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('size')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $sizes = ApparelSize::all();
        return view('products.create', compact('sizes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'other_data' => 'nullable|string',
            'size_id' => 'required|integer',
        ]);

        Product::create($request->all());
        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        $sizes = ApparelSize::all();
        return view('products.edit', compact('product', 'sizes'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'other_data' => 'nullable|string',
            'size_id' => 'required|integer',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
