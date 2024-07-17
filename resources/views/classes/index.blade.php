@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="py-6">
        <h1 class="text-2xl font-semibold mb-6">Classes</h1>
        <a href="{{ route('classes.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Create New Class</a>
        
        @foreach($classes as $class)
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-xl font-semibold mb-2">{{ $class->class_name }}</h2>
            <p class="text-gray-600 mb-4">Teacher: {{ $class->teacher->name }}</p>
            
            <div class="flex justify-end">
                <a href="{{ route('classes.edit', $class->class_id) }}" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                <form action="{{ route('classes.destroy', $class->class_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this class?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
