<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;

Route::get("/", [userController::class, "index"])->name("homepage");
Route::get("/paymentSuccess", [userController::class, "paymentSuccess"])->name("paymentSuccess");
Route::get("/about", [userController::class, "about"])->name("about");
Route::get("/services", [userController::class, "services"])->name("services");
Route::get("/contact", [userController::class, "contact"])->name("contact");
Route::get("/{category}/{course_slug}", [userController::class, "viewCourse"])->name("viewCourse");


Route::get("/admin", [AdminController::class, "dashboard"])->name("admin.dash");
Route::get("/admin/manageCategory", [CategoryController::class, "manageCategory"])->name("admin.manageCategory");
Route::get("/admin/manageCourse", [AdminController::class, "manageCourse"])->name("admin.manageCourse");
Route::match(["get", "post"], "/admin/insertCourse", [CourseController::class, "insertCourse"])->name("admin.insertCourse");

Route::match(['get', 'post'], '/admin/insertCategory', [CategoryController::class, 'insertCategory'])->name('category.insert');


// Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');
// Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');

Route::controller(AuthController::class)->group(function() {
    Route::match(["get", "post"], "/login", "login")->name("login");
    Route::match(["get", "post"], "/register", "register")->name("register");
    Route::get("/logout", "logout")->name("logout");
});


Route::get('/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

