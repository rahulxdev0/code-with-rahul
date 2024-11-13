@extends('layout')

@section('content')
<x-hero-section/>


{{-- <x-courses :course="$courses"/> --}}
@component('components.courses', ['courses' => $courses])
@endcomponent
{{-- {{ dd('courses') }} --}}

<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">200+ Topics Covered</h2>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
            <!-- Topic Box 1 -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">HTML & CSS Basics</p>
            </div>

            <!-- Topic Box 2 -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">JavaScript Fundamentals</p>
            </div>

            <!-- Topic Box 3 -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">Python Programming</p>
            </div>

            <!-- Topic Box 4 -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">React.js Basics</p>
            </div>

            <!-- Topic Box 5 -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">Machine Learning</p>
            </div>

            <!-- Topic Box 6 -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">Data Structures</p>
            </div>

            <!-- Additional Topic Boxes... Repeat for all 200+ topics -->
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">Node.js & Express</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">Cybersecurity Essentials</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">Cloud Computing</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">API Development</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">Node.js & Express</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">Cybersecurity Essentials</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">Cloud Computing</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">API Development</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">Cybersecurity Essentials</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">Cloud Computing</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">API Development</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <p class="text-gray-700 text-center font-semibold">API Development</p>
            </div>
            <!-- Add more topic boxes as needed to reach 200+ topics -->
        </div>
    </div>
</section>
<section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-8">Join Our Community</h2>
        <p class="mb-12 text-gray-400">Connect with us on social media and be a part of our growing community. Follow us for updates, tutorials, and more.</p>
        <div class="flex justify-center space-x-8">
            <!-- YouTube -->
            <a href="https://www.youtube.com" target="_blank" class="transform hover:scale-110 transition duration-300">
                <svg class="w-12 h-12 text-red-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M19.615 3.184C20.403 3.494 21 4.273 21 5.103v13.794c0 .83-.597 1.609-1.385 1.919-1.422.559-7.143.559-7.143.559s-5.721 0-7.143-.559C3.597 20.506 3 19.727 3 18.897V5.103c0-.83.597-1.609 1.385-1.919 1.422-.559 7.143-.559 7.143-.559s5.721 0 7.143.559zM9.545 16.364V7.636L15.818 12 9.545 16.364z" />
                </svg>
            </a>

            <!-- Discord -->
            <a href="https://discord.com" target="_blank" class="transform hover:scale-110 transition duration-300">
                <svg class="w-12 h-12 text-blue-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M20.317 4.369a19.791 19.791 0 0 0-4.885-1.515.075.075 0 0 0-.079.037c-.212.375-.446.865-.615 1.251a19.569 19.569 0 0 0-5.692 0 12.49 12.49 0 0 0-.632-1.259.073.073 0 0 0-.078-.037 19.736 19.736 0 0 0-4.885 1.515.07.07 0 0 0-.032.027C1.244 9.29.46 14.032.729 18.726a.08.08 0 0 0 .031.052 19.934 19.934 0 0 0 5.991 3.031.078.078 0 0 0 .084-.027 14.636 14.636 0 0 0 1.249-2.025.077.077 0 0 0-.041-.107c-.652-.247-1.27-.555-1.872-.911a.078.078 0 0 1-.007-.13 9.584 9.584 0 0 0 .369-.292.076.076 0 0 1 .079-.012c3.926 1.796 8.18 1.796 12.062 0a.076.076 0 0 1 .079.011c.118.091.241.191.372.293a.078.078 0 0 1-.006.129 12.3 12.3 0 0 1-1.873.911.077.077 0 0 0-.04.107 12.288 12.288 0 0 0 1.249 2.025.078.078 0 0 0 .084.028 19.906 19.906 0 0 0 5.991-3.032.078.078 0 0 0 .031-.052c.444-6.281-.761-11.005-2.612-14.33a.061.061 0 0 0-.032-.026zM8.206 15.403c-1.194 0-2.178-1.095-2.178-2.439 0-1.343.967-2.439 2.178-2.439 1.217 0 2.185 1.095 2.17 2.439 0 1.344-.967 2.439-2.17 2.439zm7.581 0c-1.195 0-2.179-1.095-2.179-2.439 0-1.343.967-2.439 2.179-2.439 1.217 0 2.185 1.095 2.17 2.439 0 1.344-.967 2.439-2.17 2.439z"/>
                </svg>
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com" target="_blank" class="transform hover:scale-110 transition duration-300">
                <svg class="w-12 h-12 text-pink-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.333 3.608 1.309.975.975 1.247 2.242 1.309 3.608.059 1.266.071 1.645.071 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.309 3.608-.975.975-2.242 1.247-3.608 1.309-1.266.059-1.645.071-4.85.071s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.309-.975-.975-1.247-2.242-1.309-3.608-.059-1.266-.071-1.645-.071-4.85s.012-3.584.07-4.85c.062-1.366.334-2.633 1.309-3.608.975-.975 2.242-1.247 3.608-1.309 1.266-.059 1.645-.071 4.85-.071zm0-2.163c-3.259 0-3.667.015-4.947.072-1.281.058-2.577.336-3.602 1.361-1.025 1.025-1.303 2.32-1.361 3.602-.057 1.281-.072 1.688-.072 4.947s.015 3.667.072 4.947c.058 1.281.336 2.577 1.361 3.602 1.025 1.025 2.32 1.303 3.602 1.361 1.281.057 1.688.072 4.947.072s3.667-.015 4.947-.072c1.281-.058 2.577-.336 3.602-1.361 1.025-1.025 1.303-2.32 1.361-3.602.057-1.281.072-1.688.072-4.947s-.015-3.667-.072-4.947c-.058-1.281-.336-2.577-1.361-3.602-1.025-1.025-2.32-1.303-3.602-1.361-1.281-.057-1.688-.072-4.947-.072zm0 5.838a6.163 6.163 0 1 0 0 12.326 6.163 6.163 0 0 0 0-12.326zm0 10.147a3.984 3.984 0 1 1 0-7.967 3.984 3.984 0 0 1 0 7.967zm6.406-10.982a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z"/>
                </svg>
            </a>

            <!-- LinkedIn -->
            <a href="https://www.linkedin.com" target="_blank" class="transform hover:scale-110 transition duration-300">
                <svg class="w-12 h-12 text-blue-700" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.327-.026-3.036-1.85-3.036-1.853 0-2.136 1.448-2.136 2.944v5.661H9.356V9.356h3.414v1.518h.048c.476-.9 1.637-1.85 3.37-1.85 3.6 0 4.266 2.368 4.266 5.448v6.98zM5.337 7.978a2.066 2.066 0 1 1 0-4.132 2.066 2.066 0 0 1 0 4.132zM3.56 20.452h3.554V9.356H3.56v11.096zM22.225 0H1.771C.792 0 0 .786 0 1.752v20.495C0 23.215.792 24 1.771 24h20.451c.979 0 1.778-.785 1.778-1.752V1.752C24 .786 23.203 0 22.225 0z"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-100">
    <div class="container mx-20 px-4">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Top Companies Where Our Students Work</h2>
        <div class="overflow-x-auto">
            <div class="flex">
                <h1 class="text-4xl">work late on</h1>
            </div>
        </div>
    </div>
</section>

<x-students-card/>
@endsection