@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-5">Students</h1>
        <a href="{{ route('students.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-3 inline-block">Add Student</a>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Gender</th>
                    <th class="px-4 py-2 text-left">Date of Birth</th>
                    <th class="px-4 py-2 text-left">Class</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td class="border px-4 py-2 text-left">{{ $student->id }}</td>
                        <td class="border px-4 py-2 text-left">{{ $student->first_name }} {{ $student->last_name }}</td>
                        <td class="border px-4 py-2 text-left">{{ $student->gender }}</td>
                        <td class="border px-4 py-2 text-left">{{ $student->date_of_birth }}</td>
                        <td class="border px-4 py-2 text-left">{{ $student->class->class_name ?? 'N/A' }}</td>
                        <td class="border px-4 py-2 text-left">
                            <a href="{{ route('students.show', $student->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">View</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded inline-block">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-block">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
