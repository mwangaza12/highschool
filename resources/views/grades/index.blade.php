@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-5">Grades</h1>
        <a href="{{ route('grades.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-5 inline-block">Add Grade</a>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Student</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Class Subject</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Grade</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Term</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        <th class="px-6 py-3 bg-gray-50"></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($grades as $grade)
                        <tr>
                            <td class="px-6 py-4">{{ $grade->student->first_name }} {{ $grade->student->last_name }}</td>
                            <td class="px-6 py-4">{{ $grade->classSubject->subject->name }} - {{ $grade->classSubject->subject_name }}</td>
                            <td class="px-6 py-4">{{ $grade->grade }}</td>
                            <td class="px-6 py-4">{{ $grade->term }}</td>
                            <td class="px-6 py-4">{{ $grade->year }}</td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('grades.show', $grade->id) }}" class="text-blue-500 hover:underline">View</a>
                                <a href="{{ route('grades.edit', $grade->id) }}" class="text-blue-500 hover:underline ml-2">Edit</a>
                                <form action="{{ route('grades.destroy', $grade->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

