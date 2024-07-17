@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-5">Student Details</h1>
        <p><strong>ID:</strong> {{ $student->id }}</p>
        <p><strong>Name:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
        <p><strong>Gender:</strong> {{ $student->gender }}</p>
        <p><strong>Date of Birth:</strong> {{ $student->date_of_birth }}</p>
        <p><strong>Admission Date:</strong> {{ $student->admission_date }}</p>
        <p><strong>Class:</strong> {{ $student->class->class_name ?? 'N/A' }}</p>
        <p><strong>Address:</strong> {{ $student->address }}</p>
        <p><strong>Phone Number:</strong> {{ $student->phone_number }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <div class="mt-5">
            <a href="{{ route('students.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-block">Back</a>
            <a href="{{ route('students.edit', $student->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded inline-block">Edit</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-block">Delete</button>
            </form>
        </div>
    </div>
@endsection
