@extends('layouts.app')

@section('content')
<h1>Add New Product Color</h1>
<form action="{{ route('product_colors.store') }}" method="POST">
    @csrf
    <label>Product:</label>
    <select name="product_id" required>
        @foreach($products as $product)
        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
        @endforeach
    </select>
    <br>
    <label>Color:</label>
    <select name="color_id" required>
        @foreach($colors as $color)
        <option value="{{ $color->id }}">{{ $color->color_name }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Save</button>
</form>
@endsection
