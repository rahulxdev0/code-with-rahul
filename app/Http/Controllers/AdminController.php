<?php

namespace App\Http\Controllers;

use App\Models\Course;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashboard(){
        return view('admin.admindash');
    }
    
    public function insertCourse(){
        return view('admin.insertCourse');
    }
    public function manageCourse(){
        $course = Course::all();
        return view('admin.manageCourse')->with('courses', $course);
    }
}
