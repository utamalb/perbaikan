@extends('layouts.app')

@section('content')
<h1>Product Colors</h1>
<a href="{{ route('product_colors.create') }}">Add New Product Color</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Color</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productColors as $productColor)
        <tr>
            <td>{{ $productColor->id }}</td>
            <td>{{ $productColor->product->product_name }}</td>
            <td>{{ $productColor->color->color_name }}</td>
            <td>
                <a href="{{ route('product_colors.edit', $productColor->id) }}">Edit</a>
                <form action="{{ route('product_colors.destroy', $productColor->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
