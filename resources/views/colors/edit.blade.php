@extends('layouts.app')

@section('content')
<h1>Edit Color</h1>
<form action="{{ route('colors.update', $color->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Color Code:</label>
    <input type="text" name="color_code" value="{{ $color->color_code }}" required>
    <br>
    <label>Color Name:</label>
    <input type="text" name="color_name" value="{{ $color->color_name }}" required>
    <br>
    <button type="submit">Update</button>
</form>
@endsection
