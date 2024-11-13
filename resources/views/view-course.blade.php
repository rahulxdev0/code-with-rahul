@extends('layout')

@section('content')

<!-- Main Content -->
<br><br><br><br>
{{-- {{ dd($course) }} --}}
<main class="flex flex-1 w-full bg-gray-100">
    <div class="w-full px-10">
        <div class=" px-6 mb-10">
            <!-- Product Details -->
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    {{-- {{ dd($course->thumbnail) }} --}}
                    <!-- Product Image -->
                    <img src="{{ asset('storage/'. $course->thumbnail) }}" alt="Product Image" class="">
                </div>
                <div class="flex flex-col ">
                    <!-- Product Info -->
                    <h1 class="text-3xl font-bold text-gray-800 mb-4 traking-wideest">{{ $course->title }}</h1>
                    <h1 class="text-xl font-semibold text-orange-700 mb-4">Category: {{ $course->category->name }}</h1>
                    <p class="text-2xl font-bold text-gray-600 mb-4">Price: {{ $course->price }}/-</p>
                    <p class="text-gray-700 mb-6">
                        Become a Certified Data Scientist with PW Skills and utilise the Power of Generative AI with machine learning, NLP, etc. Learn top-in-demand skills from the best in the industry. Transform your career in a high-demand data analytics field.
                    </p>
                    <div class="flex items-center gap-4">
                        <button class="bg-green-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-600">Buy Now</button>
                        <button class="bg-orange-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-600">Share</button>
                    </div>
                </div>
            </div>
    
            <!-- Related Products Section -->
            <div class="mt-12">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Related Products</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Related Product Card 1 -->
                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <img src="https://via.placeholder.com/300" alt="Related Product 1" class="w-full rounded-lg mb-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Related Product 1</h3>
                        <p class="text-gray-600">$59.99</p>
                        <button class="bg-blue-500 text-white font-semibold w-full mt-4 py-2 rounded-lg hover:bg-blue-600">View Product</button>
                    </div>
                    <!-- Related Product Card 2 -->
                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <img src="https://via.placeholder.com/300" alt="Related Product 2" class="w-full rounded-lg mb-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Related Product 2</h3>
                        <p class="text-gray-600">$79.99</p>
                        <button class="bg-blue-500 text-white font-semibold w-full mt-4 py-2 rounded-lg hover:bg-blue-600">View Product</button>
                    </div>
                    <!-- Related Product Card 3 -->
                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <img src="https://via.placeholder.com/300" alt="Related Product 3" class="w-full rounded-lg mb-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Related Product 3</h3>
                        <p class="text-gray-600">$89.99</p>
                        <button class="bg-blue-500 text-white font-semibold w-full mt-4 py-2 rounded-lg hover:bg-blue-600">View Product</button>
                    </div>
                    <!-- Related Product Card 4 -->
                    <div class="bg-white rounded-lg shadow-lg p-4">
                        <img src="https://via.placeholder.com/300" alt="Related Product 4" class="w-full rounded-lg mb-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Related Product 4</h3>
                        <p class="text-gray-600">$49.99</p>
                        <button class="bg-blue-500 text-white font-semibold w-full mt-4 py-2 rounded-lg hover:bg-blue-600">View Product</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
