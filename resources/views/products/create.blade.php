@extends('layouts.app')

@section('content')
<h1>Add New Product</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Product Name:</label>
    <input type="text" name="product_name" required>
    <br>
    <label>Other Data:</label>
    <textarea name="other_data"></textarea>
    <br>
    <label>Size:</label>
    <select name="size_id" required>
        @foreach($sizes as $size)
        <option value="{{ $size->id }}">{{ $size->size_code }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Save</button>
</form>
@endsection
