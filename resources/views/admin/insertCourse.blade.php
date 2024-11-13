@extends('admin.adminbase')

@section('content')

<div class="max-w-3xl mx-auto bg-white p-8 shadow-md rounded-lg">
    <h1 class="text-2xl font-bold text-gray-700 mb-6">Insert New Course</h1>
    
    <form action="{{ route('admin.insertCourse') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Course Title -->
        <div class="mb-4">
            <label for="title" class="block text-gray-600 font-medium">Course Title</label>
            <input type="text" id="title" name="title" class="w-full p-3 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter course title" required>
        </div>

        <!-- Category -->
        <div class="mb-4">
            <label for="category" class="block text-gray-600 font-medium">Category</label>
            <select id="category" name="category_id" class="w-full p-3 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                <!-- Add more categories as needed -->
            </select>
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label for="description" class="block text-gray-600 font-medium">Course Description</label>
            <textarea id="description" name="description" class="w-full p-3 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter course description" rows="5" required></textarea>
        </div>

        <!-- Level -->
        <div class="mb-4">
            <label for="level" class="block text-gray-600 font-medium">Level</label>
            <select id="level" name="level" class="w-full p-3 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
        </div>

        <!-- 2 Inputs in a row: Price and Duration -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <!-- Price -->
            <div>
                <label for="price" class="block text-gray-600 font-medium">Price</label>
                <input type="number" id="price" name="price" step="0.01" class="w-full p-3 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter course price" required>
            </div>

            <!-- Duration -->
            <div>
                <label for="duration" class="block text-gray-600 font-medium">Duration (in hours)</label>
                <input id="duration" name="duration" class="w-full p-3 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter course duration" required>
            </div>
        </div>

        <!-- Start Date and End Date -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <!-- Start Date -->
            <div>
                <label for="start_date" class="block text-gray-600 font-medium">Start Date</label>
                <input type="date" id="start_date" name="start_date" class="w-full p-3 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- End Date -->
            <div>
                <label for="end_date" class="block text-gray-600 font-medium">End Date</label>
                <input type="date" id="end_date" name="end_date" class="w-full p-3 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <!-- Course Thumbnail -->
        <div class="mb-4">
            <label for="thumbnail" class="block text-gray-600 font-medium">Course Thumbnail</label>
            <input type="file" id="thumbnail" name="thumbnail" class="w-full p-3 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Insert Course</button>
        </div>
    </form>
</div>

@endsection
