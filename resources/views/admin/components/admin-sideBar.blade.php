<!-- Sidebar -->
<div class="bg-gray-800 w-full md:w-64 h-screen">
   <div class="flex items-center justify-center h-16 text-white text-xl font-semibold">
       Admin Panel
   </div>
   <nav class="text-white px-4 py-6">
       <a href="{{ route('admin.dash') }}"
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Dashboard</a>
       <a href="{{ route('admin.manageCategory') }}"
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Manage
           Categories</a>
       <a href="{{ route('admin.manageCourse') }}"
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Manage
           Course</a>
       <a href=""
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Insert
           Products</a>
       <a href=""
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Manage
           Orders</a>
       <a href=""
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Manage
           Static Page</a>
       <a href=""
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Manage
           Payments</a>
       <a href=""
           class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Settings</a>
       <!-- Add more links as needed -->
   </nav>
</div>