@extends('layouts.app')

@section('content')
<h1>Edit Product</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Product Name:</label>
    <input type="text" name="product_name" value="{{ $product->product_name }}" required>
    <br>
    <label>Other Data:</label>
    <textarea name="other_data">{{ $product->other_data }}</textarea>
    <br>
    <label>Size:</label>
    <select name="size_id" required>
        @foreach($sizes as $size)
        <option value="{{ $size->id }}" {{ $size->id == $product->size_id ? 'selected' : '' }}>{{ $size->size_code }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Update</button>
</form>
@endsection
