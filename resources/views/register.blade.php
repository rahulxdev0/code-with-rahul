@extends('layout')
@section('content')

<br><br><br><br>
<div class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Create an Account</h2>
        <p class="text-gray-600 mb-6">Please fill in the details to register</p>

        <!-- Registration Form -->
        <form action="{{ route('register') }}" method="post" class="space-y-5">
            @csrf
            <!-- Full Name Input -->
            <div>
                <label for="fullname" class="block text-gray-700 text-sm font-medium mb-1">Full Name</label>
                <input type="text" id="fullname" name="fullname" class="w-full p-3 rounded-lg shadow-md focus:ring-2 focus:ring-blue-500 focus:outline-none border border-gray-300" placeholder="Enter your full name">
                @error('fullname')
                    <p class="text-sm font-semibold text-blue-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contact Input -->
            <div>
                <label for="contact" class="block text-gray-700 text-sm font-medium mb-1">Contact</label>
                <input type="text" id="contact" name="contact" class="w-full p-3 rounded-lg shadow-md focus:ring-2 focus:ring-blue-500 focus:outline-none border border-gray-300" placeholder="Enter your contact number">
                @error('contact')
                    <p class="text-sm font-semibold text-blue-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Input -->
            <div>
                <label for="email" class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 rounded-lg shadow-md focus:ring-2 focus:ring-blue-500 focus:outline-none border border-gray-300" placeholder="Enter your email">
                @error('email')
                    <p class="text-sm font-semibold text-blue-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Input -->
            <div>
                <label for="password" class="block text-gray-700 text-sm font-medium mb-1">Password</label>
                <input type="password" id="password" name="password" class="w-full p-3 rounded-lg shadow-md focus:ring-2 focus:ring-blue-500 focus:outline-none border border-gray-300" placeholder="Enter your password">
                @error('password')
                    <p class="text-sm font-semibold text-blue-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Register Button -->
            <button type="submit" class="w-full bg-gradient-to-r from-[#7a1000] to-[#03012c] text-white py-3 rounded-lg font-semibold hover:shadow-lg transition duration-300">Register</button>

            <!-- Already have an account? -->
            <p class="text-center text-gray-600 mt-4">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a></p>
        </form>
    </div>

</div>
@endsection