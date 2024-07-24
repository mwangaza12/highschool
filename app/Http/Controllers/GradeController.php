<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Student;
use App\Models\ClassSubject;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('grades.index', compact('grades'));
    }

    public function create()
    {
        $students = Student::all();
        $classSubjects = ClassSubject::with(['schoolClass'])->get();
        return view('grades.create', compact('students', 'classSubjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'class_subject_id' => 'required|exists:class_subjects,id',
            'grade' => 'required',
            'term' => 'required',
            'year' => 'required'
        ]);

        Grade::create($request->all());

        return redirect()->route('grades.index')->with('success', 'Grade recorded successfully.');
    }

    public function show(Grade $grade)
    {
        return view('grades.show', compact('grade'));
    }

    public function edit(Grade $grade)
    {
        $students = Student::all();
        $classSubjects = ClassSubject::all();
        return view('grades.edit', compact('grade', 'students', 'classSubjects'));
    }

    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'class_subject_id' => 'required|exists:class_subjects,id',
            'grade' => 'required',
            'term' => 'required',
            'year' => 'required'
        ]);

        $grade->update($request->all());

        return redirect()->route('grades.index')->with('success', 'Grade updated successfully.');
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect()->route('grades.index')->with('success', 'Grade deleted successfully.');
    }
}
