@extends('layouts.app')

@section('content')
<h1>Edit Size</h1>
<form action="{{ route('apparel_sizes.update', $apparelSize->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Size Code:</label>
    <input type="text" name="size_code" value="{{ $apparelSize->size_code }}" required>
    <br>
    <label>Sort Order:</label>
    <input type="number" name="sort_order" value="{{ $apparelSize->sort_order }}" required>
    <br>
    <button type="submit">Update</button>
</form>
@endsection
