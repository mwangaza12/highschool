@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-5">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Cards for Overview -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Overview</h2>
                <div class="flex justify-between items-center mb-2">
                    <div class="text-gray-600">Total Students:</div>
                    <div class="text-lg font-bold">{{ $totalStudents }}</div>
                </div>
                <div class="flex justify-between items-center mb-2">
                    <div class="text-gray-600">Total Teachers:</div>
                    <div class="text-lg font-bold">{{ $totalTeachers }}</div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="text-gray-600">Total Classes:</div>
                    <div class="text-lg font-bold">{{ $totalClasses }}</div>
                </div>
            </div>

        </div>
    </div>
@endsection
