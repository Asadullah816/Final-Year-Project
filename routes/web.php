<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
// ===========================================================
//  -------------------- GUEST--------------------------------
Route::middleware('guest')->group(function () {
    Route::view("/register", 'pages/register')->name("register");
    Route::post("/register", [UserController::class, "Register"])->name("register");
    Route::view('/login', 'pages/login')->name('login');
    Route::post('/login', [UserController::class, 'Login'])->name('login');
});
//  -------------------- GUEST--------------------------------
// ===========================================================

// ===========================================================
//  -------------------- AUTH --------------------------------
Route::middleware(['auth'])->group(function () {
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
    Route::get('dashboard', [CourseController::class, 'index'])->name('dashboard');
});
//  -------------------- AUTH --------------------------------
// ===========================================================
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// ===========================================================
//  -------------------- ADMIN -------------------------------
Route::middleware([AdminMiddleware::class])->prefix('dashboard')->group(function () {
    Route::get('courses', [CourseController::class, 'courses'])->name('courses');
    Route::post('addcourse', [CourseController::class, 'AddCourse'])->name('addcourse');
    Route::post('addcategory', [CourseController::class, 'Addcategory'])->name('addcategory');
    Route::get('addcourse', [CourseController::class, 'addcourseshow'])->name('addcourse');
    Route::view('addcategory', 'admin.pages.addcategory')->name('addcategory');
    Route::get('deletecourse/{id}', [CourseController::class, 'deletecourse'])->name('deletecourse');
    Route::get('updatecourse/{id}', [CourseController::class, 'showcourse'])->name('updatecourse');
    Route::post('updatecourse/{id}', [CourseController::class, 'updatecourse'])->name('updatecourse');
});
//  -------------------- ADMIN -------------------------------
// ===========================================================
// ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
Route::view('/mail', 'mail/mailform')->name('mail');
Route::post('mailsend', [HomeController::class, 'mail'])->name('sendmail');
Route::view('dashboard1', 'admin.dashboard')->name('dashboard1');
Route::view('dummy', 'dummydata')->name('dummy');
Route::view('course', 'pages.singlecourse')->name('course');
Route::get("/", [CourseController::class, 'home'])->name('home');
Route::view('/addpost', 'pages/addpost')->name('addpost');
Route::post("/add", [HomeController::class, "Add"])->name("add");
