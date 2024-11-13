<!-- Header -->
<header class="bg-gradient-to-r from-[#03012c] to-[#7a1000] shadow-lg absolute mt-4 z-10 w-full rounded-full px-4">
    <div class="container mx-auto py-3 flex items-center justify-between  gap-2">

        <div class="flex items-center gap-2">
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white focus:outline-none items-center flex">
                    <svg class="w-6 h-6 items-center" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- Logo Section -->
            <div class="flex items-center space-x-3">
                {{-- <img src="https://picsum.photos/40" alt="Logo" class="h-10 w-10 rounded-full"> --}}
                <span class="text-lg md:text-2xl font-bold text-white">Code with Rahul</span>
            </div>
        </div>



        <!-- Navigation Menu -->
        <div class="flex items-center gap-4">
            <nav class="hidden md:flex items-center space-x-8">
                <a href="{{ route('homepage') }}"
                    class="text-lg font-medium text-white hover:text-gray-300 transition duration-300">Home</a>
                <a href="{{ route('about') }}"
                    class="text-lg font-medium text-white hover:text-gray-300 transition duration-300">About</a>
                <a href="{{ route('services') }}"
                    class="text-lg font-medium text-white hover:text-gray-300 transition duration-300">Services</a>
            </nav>
            @guest
                <a href="{{ route('login') }}"
                    class="block text-white font-medium rounded-full text-sm px-3 md:px-5 py-2.5 text-center outline-none hover:bg-[#03012c]  border-[1.5px] border-white">
                    Login / Register
                </a>
            @endguest
            @auth
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white outline-none border border-white font-medium rounded-full text-sm px-3 py-2 text-center inline-flex items-center"
                    type="button"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    {{ auth()->user()->name }} <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Our Courses</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="drawer-menu" class="fixed inset-0 z-20 bg-black bg-opacity-50 hidden">
        <div class="fixed top-0 left-0 h-full w-2/4 max-w-sm bg-gray-400 shadow-xl">
            <!-- Close Button -->
            <div class="p-4 flex justify-between items-center">
                <span class="text-white text-2xl font-bold">Menu</span>
                <button id="close-drawer" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <!-- Drawer Navigation Menu -->
            <nav class="flex flex-col space-y-2 px-4">
                <a href="{{ route('homepage') }}"
                    class="text-lg font-medium text-white py-2 hover:bg-blue-700 transition duration-300">Home</a>
                <a href="{{ route('about') }}"
                    class="text-lg font-medium text-white py-2 hover:bg-blue-700 transition duration-300">About</a>
                <a href="{{ route('services') }}"
                    class="text-lg font-medium text-white py-2 hover:bg-blue-700 transition duration-300">Services</a>
                <a href="{{ route('contact') }}"
                    class="text-lg font-medium text-white py-2 hover:bg-blue-700 transition duration-300">Contact</a>
            </nav>
        </div>
    </div>
</header>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const drawerMenu = document.getElementById('drawer-menu');
    const closeDrawer = document.getElementById('close-drawer');

    mobileMenuButton.addEventListener('click', () => {
        drawerMenu.classList.remove('hidden');
    });

    closeDrawer.addEventListener('click', () => {
        drawerMenu.classList.add('hidden');
    });

    // Close drawer when clicking outside
    drawerMenu.addEventListener('click', (event) => {
        if (event.target === drawerMenu) {
            drawerMenu.classList.add('hidden');
        }
    });
</script>
