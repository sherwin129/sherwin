@extends('layouts.app')

@section('content')
<h1>Edit Section</h1>

<form method="POST" action="{{ route('sections.update', $section) }}">
    @csrf
    @method('PUT')

    <label>Section Name:</label>
    <input type="text" name="name" value="{{ old('name', $section->name) }}">
    @error('name')<div style="color:#e53e3e;">{{ $message }}</div>@enderror

    <button type="submit">Update</button>
</form>

<a href="{{ route('sections.index') }}" style="display:inline-block; margin-top:1rem; color:#2d3748;">Back to Sections</a>
@endsection
