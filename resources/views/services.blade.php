<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services | Starter</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    
    {{-- @include("header") --}}
    <x-header/>

   <!-- Hero Section -->
   <section class="bg-blue-500 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold mb-6">Our Services</h1>
        <p class="text-xl mb-8">Explore the range of services we offer to help your business thrive.</p>
    </div>
</section>

<!-- Services Section -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">What We Offer</h2>
            <p class="text-gray-600 mt-4">Our comprehensive services are designed to meet your business needs.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="mb-4">
                    <svg class="w-16 h-16 text-blue-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l6 6-6 6M21 7l-6 6 6 6"></path></svg>
                </div>
                <h3 class="text-2xl font-semibold text-blue-500 mb-4">Consulting</h3>
                <p class="text-gray-600">Expert advice to help you navigate complex business challenges.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="mb-4">
                    <svg class="w-16 h-16 text-blue-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
                <h3 class="text-2xl font-semibold text-blue-500 mb-4">Development</h3>
                <p class="text-gray-600">Custom software solutions that drive efficiency and growth.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="mb-4">
                    <svg class="w-16 h-16 text-blue-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </div>
                <h3 class="text-2xl font-semibold text-blue-500 mb-4">Marketing</h3>
                <p class="text-gray-600">Strategic marketing campaigns that deliver measurable results.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="mb-4">
                    <svg class="w-16 h-16 text-blue-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m0 0l-3-3m3 3l3-3"></path></svg>
                </div>
                <h3 class="text-2xl font-semibold text-blue-500 mb-4">SEO Optimization</h3>
                <p class="text-gray-600">Enhance your online presence with our expert SEO services.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="mb-4">
                    <svg class="w-16 h-16 text-blue-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 16h10"></path></svg>
                </div>
                <h3 class="text-2xl font-semibold text-blue-500 mb-4">Content Creation</h3>
                <p class="text-gray-600">High-quality content that engages and converts your audience.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="mb-4">
                    <svg class="w-16 h-16 text-blue-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M3 6h18m-9 6v6"></path></svg>
                </div>
                <h3 class="text-2xl font-semibold text-blue-500 mb-4">Analytics</h3>
                <p class="text-gray-600">Data-driven insights to help you make informed business decisions.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="bg-blue-500 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to Grow Your Business?</h2>
        <p class="text-xl mb-8">Contact us today to discuss how our services can help you achieve your goals.</p>
        <a href="#" class="bg-white text-blue-500 px-6 py-3 font-semibold rounded-lg shadow-md hover:bg-gray-200">Contact Us</a>
    </div>
</section>

<x-footer/>
</body>
</html>