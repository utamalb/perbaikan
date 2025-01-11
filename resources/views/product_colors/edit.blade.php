@extends('layouts.app')

@section('content')
<h1>Edit Product Color</h1>
<form action="{{ route('product_colors.update', $productColor->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Product:</label>
    <select name="product_id" required>
        @foreach($products as $product)
        <option value="{{ $product->id }}" {{ $product->id == $productColor->product_id ? 'selected' : '' }}>{{ $product->product_name }}</option>
        @endforeach
    </select>
    <br>
    <label>Color:</label>
    <select name="color_id" required>
        @foreach($colors as $color)
        <option value="{{ $color->id }}" {{ $color->id == $productColor->color_id ? 'selected' : '' }}>{{ $color->color_name }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Update</button>
</form>
@endsection
