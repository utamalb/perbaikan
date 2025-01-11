<?php

namespace App\Http\Controllers;

use App\Models\ProductColor;
use App\Models\Product;
use App\Models\Color;
use Illuminate\Http\Request;

class ProductColorController extends Controller
{
    public function index()
    {
        $productColors = ProductColor::with(['product', 'color'])->get();
        return view('product_colors.index', compact('productColors'));
    }

    public function create()
    {
        $products = Product::all();
        $colors = Color::all();
        return view('product_colors.create', compact('products', 'colors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'color_id' => 'required|integer',
        ]);

        ProductColor::create($request->all());
        return redirect()->route('product_colors.index');
    }

    public function edit(ProductColor $productColor)
    {
        $products = Product::all();
        $colors = Color::all();
        return view('product_colors.edit', compact('productColor', 'products', 'colors'));
    }

    public function update(Request $request, ProductColor $productColor)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'color_id' => 'required|integer',
        ]);

        $productColor->update($request->all());
        return redirect()->route('product_colors.index');
    }

    public function destroy(ProductColor $productColor)
    {
        $productColor->delete();
        return redirect()->route('product_colors.index');
    }
}
