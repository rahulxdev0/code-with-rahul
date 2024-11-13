<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view("home", compact('courses'));
    }
    public function about(){
        return view("about");
    }
    public function services(){
        return view("services");
    }
    public function contact(){
        return view("contact");
    }
    public function login(){
        return view("login");
    }
    public function register(){
        return view("register");
    }
    public function paymentSuccess(){
        return view("paymentSuccess");
    }
    public function viewCourse($category, $course_slug){
        $data['course'] = Course::where('course_slug', $course_slug)->first();
        return view("view-course", $data);
    }
}
