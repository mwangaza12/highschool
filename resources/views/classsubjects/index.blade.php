@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Class Subjects</h1>
        <a href="{{ route('classsubjects.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:bg-green-600 mb-4 inline-block">Add Subject</a>
        <table class="min-w-full divide-y divide-gray-200">
            <thead lass="text-center">
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Class</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Subject Name</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Teacher</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($subjects as $subject)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $subject->id }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $subject->schoolClass->class_name }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $subject->subject->subject_name }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $subject->teacher->first_name }} {{ $subject->teacher->last_name }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                        <a href="{{ route('subjects.show', $subject->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                        <a href="{{ route('subjects.edit', $subject->id) }}" class="text-indigo-600 hover:text-indigo-900 ml-2">Edit</a>
                        <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
