@extends('layouts.app')

@section('content')
<h1>Add New Category</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label>Parent Category ID:</label>
    <input type="number" name="parent_category_id">
    <br>
    <label>Category Name:</label>
    <input type="text" name="category_name" required>
    <br>
    <button type="submit">Save</button>
</form>
@endsection
