@extends('layouts.app')

@section('content')
<h1>Colors</h1>
<a href="{{ route('colors.create') }}">Add New Color</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Color Code</th>
            <th>Color Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($colors as $color)
        <tr>
            <td>{{ $color->id }}</td>
            <td>{{ $color->color_code }}</td>
            <td>{{ $color->color_name }}</td>
            <td>
                <a href="{{ route('colors.edit', $color->id) }}">Edit</a>
                <form action="{{ route('colors.destroy', $color->id) }}" method="POST" style="display:inline-block;">
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
