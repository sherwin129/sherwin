@extends('layouts.app')

@section('content')
<h1>Student: {{ $student->name }}</h1>
<p>ID Number: {{ $student->id_number }}</p>
<p>Section: {{ $student->section->name ?? 'N/A' }}</p>

<a href="{{ route('students.index') }}">Back to Students</a>

@endsection
