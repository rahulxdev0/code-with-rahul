@extends('admin.adminbase')

@section('content')
<div class="container mx-auto ">
    <div class="flex items-center justify-between mb-3">
        <h1 class="text-2xl font-bold text-gray-700">Manage Course</h1>
        <a href="{{ route('admin.insertCourse') }}" class="px-4 py-2 bg-orange-600 text-white text-center font-semibold rounded-full">Insert Courses</a>
    </div>
    
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">
                    <th class="py-3 px-6">ID</th>
                    <th class="py-3 px-6">Course Name</th>
                    <th class="py-3 px-6">Duration</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <!-- Example Row 1 -->
                @foreach ($courses as $course)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6">{{ $course->id }}</td>
                    <td class="py-3 px-6 ">{{ $course->title }}</td>
                    <td class="py-3 px-6 line-clamp-4 overflow-y-scroll">{{ $course->description }}</td>
                    <td class="py-3 px-6 text-center">
                        <a href="#" class="text-blue-500 hover:text-blue-700 mx-2">Edit</a>
                        <a href="#" class="text-red-500 hover:text-red-700 mx-2">Delete</a>
                    </td>
                </tr>
                @endforeach
                

                

                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>
</div>

@endsection