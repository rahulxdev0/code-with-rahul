@extends('admin.adminbase')

@section('content')
<div class="flex items-center justify-center mt-5">
    <div class="w-full max-w-lg p-8 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Insert New Category</h2>
    
        <form action="{{ route('category.insert') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Category Name Field -->
            <div>
                <label for="category-name" class="block text-sm font-medium text-gray-600">Category Name</label>
                <input type="text" id="category-name" name="category_name"
                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="Enter category name" required>
            </div>
    
            <!-- Category Description Field -->
            <div>
                <label for="category-description" class="block text-sm font-medium text-gray-600">Description</label>
                <textarea id="category-description" name="category_description"
                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="Enter category description" rows="4"></textarea>
            </div>
    
            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition duration-300">
                    Add Category
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
