<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::with(['product', 'category'])->get();
        return view('product_categories.index', compact('productCategories'));
    }

    public function create()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product_categories.create', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'category_id' => 'required|integer',
        ]);

        ProductCategory::create($request->all());
        return redirect()->route('product_categories.index');
    }

    public function edit(ProductCategory $productCategory)
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product_categories.edit', compact('productCategory', 'products', 'categories'));
    }

    public function update(Request $request, ProductCategory $productCategory)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'category_id' => 'required|integer',
        ]);

        $productCategory->update($request->all());
        return redirect()->route('product_categories.index');
    }

    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return redirect()->route('product_categories.index');
    }
}
