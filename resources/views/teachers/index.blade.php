@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-5">Teachers</h1>
        <a href="{{ route('teachers.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block mb-5">Add Teacher</a>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">First Name</th>
                        <th class="py-2 px-4 border-b">Last Name</th>
                        <th class="py-2 px-4 border-b">Gender</th>
                        <th class="py-2 px-4 border-b">Date of Birth</th>
                        <th class="py-2 px-4 border-b">Hire Date</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $teacher->first_name }}</td>
                            <td class="py-2 px-4 border-b">{{ $teacher->last_name }}</td>
                            <td class="py-2 px-4 border-b">{{ $teacher->gender }}</td>
                            <td class="py-2 px-4 border-b">{{ $teacher->date_of_birth }}</td>
                            <td class="py-2 px-4 border-b">{{ $teacher->hire_date }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('teachers.show', $teacher->id) }}" class="text-blue-500 hover:underline">View</a>
                                <a href="{{ route('teachers.edit', $teacher->id) }}" class="text-blue-500 hover:underline ml-2">Edit</a>
                                <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" class="inline">
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
