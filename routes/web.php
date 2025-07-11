<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, 'Show']);
Route::post("/add", [HomeController::class, "Add"])->name("add");
Route::view("/register", 'pages/register')->name("register");
Route::post("/register", [UserController::class, "Register"])->name("register");
Route::view('/login', 'pages/login')->name('login');
Route::post('/login', [UserController::class, 'Login'])->name('login');
Route::view('/addpost', 'pages/addpost')->name('addpost');
Route::middleware(['auth'])->group(function () {
    Route::view("/add", "add")->name("Addview");
    Route::get("/update/{id}", [HomeController::class, "ShowUpdate"])->name("showupdate");
    Route::post("/update", [HomeController::class, "update"])->name("update");
    Route::get("/delete/{id}", [HomeController::class, "delete"])->name("delete");
    Route::view("/add", "add")->name("Addview");
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
    Route::post('addpost', [HomeController::class, 'AddPost'])->name('addpost');
    Route::get("/editpost/{id}", [HomeController::class, 'vieweditpost'])->name('viewedit');
    Route::post('/editpost', [HomeController::class, 'editpost'])->name('editpost');
    Route::get('/deletepost/{id}', [HomeController::class, 'deletePost'])->name("deletepost");
});
Route::middleware([AdminMiddleware::class])->prefix('dashboard')->group(function () {
    Route::view('/', 'admin.dashboard')->name('dashboard');
    Route::get('courses', [CourseController::class, 'courses'])->name('courses');
    Route::post('addcourse', [CourseController::class, 'AddCourse'])->name('addcourse');
    Route::view('addcourse', 'admin.pages.addCourses')->name('addcourse');
    Route::get('deletecourse/{id}', [CourseController::class, 'deletecourse'])->name('deletecourse');
    Route::get('updatecourse/{id}', [CourseController::class, 'showcourse'])->name('updatecourse');
    Route::post('updatecourse/{id}', [CourseController::class, 'updatecourse'])->name('updatecourse');
});
Route::view('/mail', 'mail/mailform')->name('mail');
Route::post('mailsend', [HomeController::class, 'mail'])->name('sendmail');
Route::view('dashboard1', 'admin.dashboard')->name('dashboard1');
// =---------------------------==
