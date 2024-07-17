@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-5">Teacher Details</h1>
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg mx-auto">
            <p><strong>First Name:</strong> {{ $teacher->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $teacher->last_name }}</p>
            <p><strong>Gender:</strong> {{ $teacher->gender }}</p>
            <p><strong>Date of Birth:</strong> {{ $teacher->date_of_birth }}</p>
            <p><strong>Hire Date:</strong> {{ $teacher->hire_date }}</p>
            <p><strong>Address:</strong> {{ $teacher->address }}</p>
            <p><strong>Phone Number:</strong> {{ $teacher->phone_number }}</p>
            <p><strong>Email:</strong> {{ $teacher->email }}</p>
            <p><strong>Subject:</strong> {{ $teacher->subject->name }}</p>
            <a href="{{ route('teachers.edit', $teacher->id) }}" class="text-blue-500 hover:underline">Edit</a>
        </div>
    </div>
@endsection
