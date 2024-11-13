<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    {{-- @include("header") --}}
    <x-header/>
     
    <br><br><br><br>
    <!-- Hero Section -->
    <section class="bg-teal-500 text-white py-20 ">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-6">About Us</h1>
            <p class="text-xl mb-8">Learn more about our mission, values, and history.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Our Mission</h2>
                <p class="text-gray-600 mt-4">To provide innovative solutions that empower businesses and individuals to achieve their goals.</p>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-8">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center md:w-1/3">
                    <h3 class="text-2xl font-semibold text-blue-500 mb-4">Innovation</h3>
                    <p class="text-gray-600">We constantly innovate to provide the best solutions for our clients.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center md:w-1/3">
                    <h3 class="text-2xl font-semibold text-blue-500 mb-4">Integrity</h3>
                    <p class="text-gray-600">We believe in doing business with integrity and transparency.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center md:w-1/3">
                    <h3 class="text-2xl font-semibold text-blue-500 mb-4">Excellence</h3>
                    <p class="text-gray-600">We strive for excellence in everything we do.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section class="bg-gray-200 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">Our History</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-blue-500 mb-4">The Beginning</h3>
                    <p class="text-gray-600">Our company was founded in [Year] with a vision to revolutionize the industry. Since then, we've grown from a small startup to a leading provider in our field.</p>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-blue-500 mb-4">Growth and Expansion</h3>
                    <p class="text-gray-600">Over the years, we've expanded our services and reached new markets, always staying true to our mission of innovation, integrity, and excellence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">Meet the Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="rounded-full mx-auto mb-4">
                    <h3 class="text-2xl font-semibold text-blue-500 mb-2">Rahul Kumar</h3>
                    <p class="text-gray-600">CEO</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="rounded-full mx-auto mb-4">
                    <h3 class="text-2xl font-semibold text-blue-500 mb-2">Saumya</h3>
                    <p class="text-gray-600">CTO</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="rounded-full mx-auto mb-4">
                    <h3 class="text-2xl font-semibold text-blue-500 mb-2">Sujit Singh</h3>
                    <p class="text-gray-600">COO</p>
                </div>
            </div>
        </div>
    </section>

    <x-footer/>
</body>
</html>
