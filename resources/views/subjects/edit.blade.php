@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="py-6">
        <h1 class="text-2xl font-semibold mb-6">Edit Subject: {{ $subject->subject_name }}</h1>
        <form action="{{ route('subjects.update', $subject->id) }}" method="POST" class="max-w-md bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="subject_name">Subject Name</label>
                <input type="text" id="subject_name" name="subject_name" value="{{ $subject->subject_name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <!-- Additional fields as needed -->
            
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Subject</button>
                <a href="{{ route('subjects.index') }}" class="text-gray-600">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

