@extends('layouts.app')

@section('content')
<h1>Apparel Sizes</h1>
<a href="{{ route('apparel_sizes.create') }}">Add New Size</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Size Code</th>
            <th>Sort Order</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sizes as $size)
        <tr>
            <td>{{ $size->id }}</td>
            <td>{{ $size->size_code }}</td>
            <td>{{ $size->sort_order }}</td>
            <td>
                <a href="{{ route('apparel_sizes.edit', $size->id) }}">Edit</a>
                <form action="{{ route('apparel_sizes.destroy', $size->id) }}" method="POST" style="display:inline-block;">
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
