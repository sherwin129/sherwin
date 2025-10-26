<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Section;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('section')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $sections = Section::all();
        return view('students.create', compact('sections'));
    }

    public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'id_number' => 'required|unique:students,id_number',
                'section_id' => 'required|exists:sections,id',
            ]);

            Student::create($request->all());

            return redirect()->route('students.index')->with('success', 'Student created successfully.');
        }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $sections = Section::all();
        return view('students.edit', compact('student', 'sections'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'id_number' => "required|unique:students,id_number,{$student->id}",
            'section_id' => 'required|exists:sections,id',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
