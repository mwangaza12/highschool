@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold my-4">Attendance Details</h1>
    <table class="min-w-full divide-y divide-gray-200">
        <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap w-1/6 font-medium text-gray-500">ID</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $attendance->attendance_id }}</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap w-1/6 font-medium text-gray-500">Student</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $attendance->student->name }}</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap w-1/6 font-medium text-gray-500">Class</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $attendance->class->name }}</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap w-1/6 font-medium text-gray-500">Date</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $attendance->date }}</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap w-1/6 font-medium text-gray-500">Status</td>
                <td class="px-6 py-4 whitespace-no-wrap">{{ $attendance->status }}</td>
            </tr>
        </tbody>
    </table>
    <div class="mt-4">
        <a href="{{ route('attendances.edit', $attendance->attendance_id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
        <form action="{{ route('attendances.destroy', $attendance->attendance_id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-4">Delete</button>
        </form>
    </div>
</div>
@endsection

