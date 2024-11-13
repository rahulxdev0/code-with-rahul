<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Course;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CourseController extends Controller
{
    public function insertCourse(Request $request)
    {
        $categories = Category::all();

        if($request->isMethod("post")){
            // Validate form input
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'description' => 'required|string',
            'level' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'start_date' => 'required|date',
            'thumbnail' => 'nullable|file|image|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
        } else {
            $thumbnail = null;
        }

        // Generate unique slug
        $courseSlug = Str::slug($request->title, '-') . '-' . uniqid();

        // Insert data into the database
        Course::create([
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description'),
            'level' => $request->input('level'),
            'price' => $request->input('price'),
            'duration' => $request->input('duration'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'thumbnail' => $thumbnail,
            'course_slug' => $courseSlug,
        ]);

        return redirect()->route('admin.manageCourse')->with('success', 'Course inserted successfully!');
        }

        return view('admin.insertCourse', ['categories' => $categories]);
    }

    
}
