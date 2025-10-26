@extends('layouts.app')

@section('content')
<h1>Sections</h1>

<a href="{{ route('sections.create') }}" style="display:inline-block; margin-bottom:1rem; background:#2d3748; color:white; padding:0.5rem 1rem; border-radius:4px; text-decoration:none;">Add Section</a>

<table>
    <thead>
        <tr>
            <th>Section Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sections as $section)
        <tr>
            <td>{{ $section->name }}</td>
            <td>
                <a href="{{ route('sections.edit', $section) }}">Edit</a> |
                <form action="{{ route('sections.destroy', $section) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Delete this section?')" type="submit" style="background:none; border:none; color:#e53e3e; cursor:pointer;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
