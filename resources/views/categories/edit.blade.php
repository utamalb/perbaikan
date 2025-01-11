@extends('layouts.app')

@section('content')
<h1>Edit Category</h1>
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Parent Category ID:</label>
    <input type="number" name="parent_category_id" value="{{ $category->parent_category_id }}">
    <br>
    <label>Category Name:</label>
    <input type="text" name="category_name" value="{{ $category->category_name }}" required>
    <br>
    <button type="submit">Update</button>
</form>
@endsection
