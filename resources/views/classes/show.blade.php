@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="py-6">
        <h1 class="text-2xl font-semibold mb-6">{{ $class->class_name }}</h1>
        <p class="text-gray-600 mb-4">Teacher: {{ $class->teacher->name }}</p>
        
        <!-- Additional class details -->
        <!-- Replace with actual details you want to display -->
        
        <div class="flex">
            <a href="{{ route('classes.edit', $class->class_id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
            <form action="{{ route('classes.destroy', $class->class_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this class?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </form>
            <a href="{{ route('classes.index') }}" class="ml-2 text-gray-600">Back to Classes</a>
        </div>
    </div>
</div>
@endsection

