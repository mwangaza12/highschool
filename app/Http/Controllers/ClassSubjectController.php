<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\ClassModel;
use App\Models\ClassSubject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClassSubjectController extends Controller
{
    public function index()
    {
        $subjects = ClassSubject::with(['schoolClass', 'teacher','subject'])->get();
        return view('classsubjects.index', compact('subjects'));
    }

    public function create()
    {
        $classes = ClassModel::all();
        $teachers = Teacher::all();
        return view('classsubjects.create', compact('classes', 'teachers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'class_id' => 'required|exists:class_models,id',
            'subject_id' => [
                'required',
                Rule::unique('subjects')->where(function ($query) use ($request) {
                    return $query->where('class_id', $request->class_id)
                                 ->where('teacher_id', $request->teacher_id);
                })
            ],
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        // Validate and store the subject
        $subject = ClassSubject::create($validatedData);
        return redirect()->route('classsubjects.index');
    }

    public function show(Subject $subject)
    {
        return view('classsubjects.show', compact('subject'));
    }

    public function edit(Subject $subject)
    {
        $classes = ClassModel::all();
        $teachers = Teacher::all();
        return view('classsubjects.edit', compact('subject', 'classes', 'teachers'));
    }

    public function update(Request $request, Subject $subject)
    {
        $validatedData = $request->validate([
            'class_id' => 'required|exists:classes,id',
            'subject_id' => [
                'required',
                Rule::unique('subjects')->ignore($subject->id)->where(function ($query) use ($request) {
                    return $query->where('class_id', $request->class_id)
                                 ->where('teacher_id', $request->teacher_id);
                })
            ],
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $subject->update($validatedData);
        return redirect()->route('classsubjects.index');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('classsubjects.index');
    }
}

