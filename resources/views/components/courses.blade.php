<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Our Courses</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Course Card 1 -->
            @foreach ($courses as $course)
            <a href="{{ route('viewCourse', ['category' => $course->category->name, 'course_slug' => $course->course_slug]) }}" class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <img src="{{ asset('storage/'. $course->thumbnail) }}" alt="Course 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-6 space-y-2">
                    <h3 class="text-2xl font-bold text-gray-800 line-clamp-3">{{ $course->title }}</h3>
 
                    <p class="text-gray-500 text-sm">Category: <span class="font-semibold text-gray-700">{{ $course->category->name }}</span></p>

                    {{-- <div class="flex justify-between text-gray-500 text-sm">
                        <p>Start Date: {{ $course->start_date }}</p>
                        <p>Duration: {{ $course->duration }} hours</p>
                    </div> --}}
            
                    {{-- <p class="text-gray-600 mt-2 text-base line-clamp-2">{{ $course->description }}</p> --}}
                    <p class="text-gray-800 font-semibold text-xl mt-2">Price: ₹{{ $course->price }}</p>

                    <button class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Enroll Now</button>
                </div>
            </a>
            
            @endforeach
        </div>

        <!-- View More Button -->
        <div class="text-center mt-8">
            <button id="viewMoreBtn" class="border border-gray-300 text-gray-500 px-5 py-2 rounded-full hover:bg-slate-200 transition duration-300">
                View More
            </button>
            
        </div>
    </div>
</section>
