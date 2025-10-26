@extends('layouts.app')

@section('content')
<h1>Students</h1>

<a href="{{ route('students.create') }}" style="display:inline-block; margin-bottom:1rem; background:#2d3748; color:white; padding:0.5rem 1rem; border-radius:4px; text-decoration:none;">Add Student</a>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>ID Number</th>
            <th>Section</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td><a href="{{ route('students.show', $student) }}">{{ $student->name }}</a></td>
            <td>{{ $student->id_number }}</td>
            <td>{{ $student->section->name ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('students.edit', $student) }}">Edit</a> |
                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Delete this student?')" type="submit" style="background:none; border:none; color:#e53e3e; cursor:pointer;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
