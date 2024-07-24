@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-5">Add Grade</h1>
        <form action="{{ route('grades.store') }}" method="POST" class="max-w-lg mx-auto">
            @csrf
            <div class="mb-4">
                <label for="student_id" class="block text-sm font-medium text-gray-700">Student:</label>
                <select id="student_id" name="student_id" required class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="class_subject_id" class="block text-sm font-medium text-gray-700">Class Subject:</label>
                <select id="class_subject_id" name="class_subject_id" required class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @foreach($classSubjects as $classSubject)
                        <option value="{{ $classSubject->id }}">{{ $classSubject->subject->name }} - {{ $classSubject->Schoolclass->class_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="grade" class="block text-sm font-medium text-gray-700">Grade:</label>
                <input type="text" id="grade" name="grade" required class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="term" class="block text-sm font-medium text-gray-700">Term:</label>
                <input type="text" id="term" name="term" required class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">Year:</label>
                <input type="text" id="year" name="year" required class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Add Grade</button>
            </div>
        </form>
    </div>
@endsection

