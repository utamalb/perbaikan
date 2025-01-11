@extends('layouts.app')

@section('content')
<h1>Add New Product Category</h1>
<form action="{{ route('product_categories.store') }}" method="POST">
    @csrf
    <label>Product:</label>
    <select name="product_id" required>
        @foreach($products as $product)
        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
        @endforeach
    </select>
    <br>
    <label>Category:</label>
    <select name="category_id" required>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Save</button>
</form>
@endsection
