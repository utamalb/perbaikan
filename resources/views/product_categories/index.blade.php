@extends('layouts.app')

@section('content')
<h1>Product Categories</h1>
<a href="{{ route('product_categories.create') }}">Add New Product Category</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productCategories as $productCategory)
        <tr>
            <td>{{ $productCategory->id }}</td>
            <td>{{ $productCategory->product->product_name }}</td>
            <td>{{ $productCategory->category->category_name }}</td>
            <td>
                <a href="{{ route('product_categories.edit', $productCategory->id) }}">Edit</a>
                <form action="{{ route('product_categories.destroy', $productCategory->id) }}" method="POST" style="display:inline-block;">
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
