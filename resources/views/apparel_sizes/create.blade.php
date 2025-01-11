@extends('layouts.app')

@section('content')
<h1>Add New Size</h1>
<form action="{{ route('apparel_sizes.store') }}" method="POST">
    @csrf
    <label>Size Code:</label>
    <input type="text" name="size_code" required>
    <br>
    <label>Sort Order:</label>
    <input type="number" name="sort_order" required>
    <br>
    <button type="submit">Save</button>
</form>
@endsection
