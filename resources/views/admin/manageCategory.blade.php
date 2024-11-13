@extends('admin.adminbase')

@section('content')
<div class="container mx-auto ">
    <div class="flex items-center justify-between mb-3">
        <h1 class="text-2xl font-bold text-gray-700">Course Categories</h1>
        <a href="{{ route('category.insert') }}" class="px-4 py-2 bg-orange-600 text-white text-center font-semibold rounded-full">Insert Category</a>
    </div>
    
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">
                    <th class="py-3 px-6">ID</th>
                    <th class="py-3 px-6">Category Name</th>
                    <th class="py-3 px-6">Description</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($categories as $category)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6">{{ $category->id }}</td>
                    <td class="py-3 px-6">{{ $category->name }}</td>
                    <td class="py-3 px-6">{{ \Illuminate\Support\Str::limit($category->description, 100, '...') }}</td>
                    <td class="py-3 px-6 text-center items-center justify-center">
                        <div class="flex">
                            <a href="#" class="text-blue-500 hover:text-blue-700 mx-2">Edit</a>
                            <a href="#" class="text-red-500 hover:text-red-700 mx-2">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection