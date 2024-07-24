<!DOCTYPE html>
<html>
<head>
    <title>High School Management</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="{{ route('dashboard') }}" class="text-white text-xl font-bold">High School Management</a>
            <nav>
                <a href="{{ route('students.index') }}" class="text-white hover:text-gray-200 px-3 py-2">Students</a>
                <a href="{{ route('teachers.index') }}" class="text-white hover:text-gray-200 px-3 py-2">Teachers</a>
                <a href="{{ route('grades.index') }}" class="text-white hover:text-gray-200 px-3 py-2">Grades</a>
                <a href="{{ route('attendance.index') }}" class="text-white hover:text-gray-200 px-3 py-2">Attendace</a>
                <a href="{{ route('subjects.index') }}" class="text-white hover:text-gray-200 px-3 py-2">Subjects</a>
                <a href="{{ route('classsubjects.index') }}" class="text-white hover:text-gray-200 px-3 py-2">Class Subjects</a>
                <a href="{{ route('classes.index') }}" class="text-white hover:text-gray-200 px-3 py-2">Classes</a>

            </nav>
        </div>
    </header>

    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

</body>
</html>
