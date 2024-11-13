@extends('admin.adminbase')

@section('title', "Dashboard |")

@section('content')

 <!-- Admin Dashboard -->
 <div class="container mx-auto px-4 py-2">

    <!-- Grid Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-700">Total Users</h2>
            <p class="mt-2 text-gray-500">1,234</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-700">Total Sales</h2>
            <p class="mt-2 text-gray-500">$24,567</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-700">New Orders</h2>
            <p class="mt-2 text-gray-500">56 Orders</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-700">Active Subscriptions</h2>
            <p class="mt-2 text-gray-500">1,002</p>
        </div>

        <!-- Card 5 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-700">Pending Invoices</h2>
            <p class="mt-2 text-gray-500">12 Invoices</p>
        </div>

        <!-- Card 6 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-700">Customer Feedback</h2>
            <p class="mt-2 text-gray-500">89 Feedbacks</p>
        </div>
    </div>

    <!-- Another Section for Charts or Tables (Example) -->
    <div class="mt-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-700">Sales Overview</h2>
            <div class="mt-4">
                <p class="text-gray-500">This section can display a chart or table.</p>
                <!-- You can embed charts or other components here -->
            </div>
        </div>
    </div>
</div>

@endsection