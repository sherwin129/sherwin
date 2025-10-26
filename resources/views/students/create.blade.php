@extends('layouts.app')

@section('content')
<h1>Create Student</h1>

<form method="POST" action="{{ route('students.store') }}">
    @csrf

    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')<div style="color:#e53e3e;">{{ $message }}</div>@enderror

    <label>ID Number:</label>
    <input type="text" name="id_number" value="{{ old('id_number') }}">
    @error('id_number')<div style="color:#e53e3e;">{{ $message }}</div>@enderror

    <label>Section:</label>
    <select name="section_id">
        <option value="">Select Section</option>
        @foreach($sections as $section)
            <option value="{{ $section->id }}" {{ old('section_id') == $section->id ? 'selected' : '' }}>{{ $section->name }}</option>
        @endforeach
    </select>
    @error('section_id')<div style="color:#e53e3e;">{{ $message }}</div>@enderror

    <button type="submit">Save</button>
</form>

<a href="{{ route('students.index') }}" style="display:inline-block; margin-top:1rem; color:#2d3748;">Back to Students</a>
@endsection
