<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Admin Pannel | {{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex flex-col md:flex-row">

        @include('admin.components.admin-sideBar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Header -->
            <header class="bg-white shadow py-4 px-6">
                <div class="flex justify-between items-center">
                    <!-- Dashboard Header -->
                    <h1 class="text-2xl font-bold text-gray-700">Admin Dashboard</h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-800"></span>
                        <img class="h-8 w-8 rounded-full" src="https://picsum.photos/200" alt="">
                        <form method="POST" action="">
                            @csrf
                            <button type="submit"
                                class="px-3 py-[6px] font-semibold rounded-lg bg-gray-200 border shadow-md">Logout</button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Main -->
            <main class="flex-1 p-6 bg-gray-100">
                @section('content')
                @show
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    @yield('js')
</body>

</html>
