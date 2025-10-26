@extends('layouts.app')

@section('content')
<h1>Section: {{ $section->name }}</h1>

<h2>Students</h2>
<ul>
    @foreach($section->students as $student)
        <li>{{ $student->name }} ({{ $student->email }})</li>
    @endforeach
</ul>

<a href="{{ route('sections.index') }}">Back to Sections</a>
@endsection
