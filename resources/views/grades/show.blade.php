@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-5">Grade Details</h1>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <p><strong>Student:</strong> {{ $grade->student->first_name }} {{ $grade->student->last_name }}</p>
            <p><strong>Class Subject:</strong> {{ $grade->classSubject->subject->name }} - {{ $grade->classSubject->class->class_name }}</p>
            <p><strong>Grade:</strong> {{ $grade->grade }}</p>
            <p><strong>Term:</strong> {{ $grade->term }}</p>
            <p><strong>Year:</strong> {{ $grade->year }}</p>
            <a href="{{ route('grades.edit', $grade->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-5 inline-block">Edit Grade</a>
        </div>
    </div>
@endsection
