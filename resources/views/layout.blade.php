<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code with Rahul</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex flex-1 relative ml-5 mr-5">
        <x-header/>
    </div>
    

    @section('content')
        @show
    
 

    <x-footer/>
    
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>

<script>
    document.getElementById('viewMoreBtn').addEventListener('click', function() {
        var moreCourses = document.getElementById('more-courses');
        if (moreCourses.classList.contains('hidden')) {
            moreCourses.classList.remove('hidden');
            this.textContent = 'View Less';
        } else {
            moreCourses.classList.add('hidden');
            this.textContent = 'View More';
        }
    });
</script>