@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold my-4">Attendance Records</h1>
    <a href="{{ route('attendance.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-4 inline-block">Add Attendance</a>
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Student</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Class</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($attendances as $attendance)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap text-left">{{ $attendance->attendance_id }}</td>
                <td class="px-6 py-4 whitespace-no-wrap text-left">{{ $attendance->student->name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap text-left">{{ $attendance->class->name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap text-left">{{ $attendance->date }}</td>
                <td class="px-6 py-4 whitespace-no-wrap text-left">{{ $attendance->status }}</td>
                <td class="px-6 py-4 whitespace-no-wrap text-left text-sm leading-5 font-medium">
                    <a href="{{ route('attendance.show', $attendance->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                    <a href="{{ route('attendance.edit', $attendance->id) }}" class="ml-4 text-yellow-600 hover:text-yellow-900">Edit</a>
                    <form action="{{ route('attendance.destroy', $attendance->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
