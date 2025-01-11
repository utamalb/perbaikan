@extends('layouts.app')

@section('content')
<h1>Add New Color</h1>
<form action="{{ route('colors.store') }}" method="POST">
    @csrf
    <label>Color Code:</label>
    <input type="text" name="color_code" required>
    <br>
    <label>Color Name:</label>
    <input type="text" name="color_name" required>
    <br>
    <button type="submit">Save</button>
</form>
@endsection
