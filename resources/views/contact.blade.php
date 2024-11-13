<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Starter</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    @include("header")

    <!-- Hero Section -->
    <section class="bg-blue-500 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-6">Contact Us</h1>
            <p class="text-xl mb-8">We'd love to hear from you! Reach out to us with any questions or inquiries.</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto bg-gray-800 p-10 rounded-lg shadow-lg">
                <h2 class="text-4xl font-bold text-center mb-8">Contact Us</h2>
                <p class="text-center text-gray-400 mb-10">Have a question or want to work together? Fill out the form below, and we'll get back to you shortly.</p>
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-300 font-medium">Name</label>
                        <input type="text" id="name" name="name" class="w-full mt-2 p-4 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out" placeholder="Your Full Name">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-300 font-medium">Email</label>
                        <input type="email" id="email" name="email" class="w-full mt-2 p-4 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out" placeholder="Your Email Address">
                    </div>
                    <div>
                        <label for="subject" class="block text-gray-300 font-medium">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full mt-2 p-4 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out" placeholder="Subject">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-300 font-medium">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full mt-2 p-4 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out" placeholder="Write your message here..."></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="w-full bg-blue-500 text-white px-6 py-4 font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300 ease-in-out">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    

    <!-- Contact Information Section -->
    <section class="bg-gray-200 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">Contact Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <svg class="w-16 h-16 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h1l1-2h4l1 2h4l1-2h4l1 2h1"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10h6"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 6v4"></path></svg>
                    <h3 class="text-2xl font-semibold text-blue-500 mb-2">Address</h3>
                    <p class="text-gray-600">123 Business Street, City, Country</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <svg class="w-16 h-16 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16v-4a4 4 0 014-4h0a4 4 0 014 4v4m2 4H6m12 0a2 2 0 01-2 2H8a2 2 0 01-2-2"></path></svg>
                    <h3 class="text-2xl font-semibold text-blue-500 mb-2">Email</h3>
                    <p class="text-gray-600">info@yourcompany.com</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <svg class="w-16 h-16 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 10h4l2-2h8l2 2h4M3 18h18"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 16v4m-4-4v4m8-4v4"></path></svg>
                    <h3 class="text-2xl font-semibold text-blue-500 mb-2">Phone</h3>
                    <p class="text-gray-600">+123 456 7890</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
