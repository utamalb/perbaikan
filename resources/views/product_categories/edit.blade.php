@extends('layouts.app')

@section('content')
<h1>Edit Product Category</h1>
<form action="{{ route('product_categories.update', $productCategory->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Product:</label>
    <select name="product_id" required>
        @foreach($products as $product)
        <option value="{{ $product->id }}" {{ $product->id == $productCategory->product_id ? 'selected' : '' }}>{{ $product->product_name }}</option>
        @endforeach
    </select>
    <br>
    <label>Category:</label>
    <select name="category_id" required>
        @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ $category->id == $productCategory->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Update</button>
</form>
@endsection
