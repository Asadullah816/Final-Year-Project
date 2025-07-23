<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all()->count();
        $user = User::where('admin', false)->get()->count();
        $categories = Category::all()->count();
        return view('admin.dashboard', compact('courses', 'user', 'categories'));
    }
    public function addcourseshow()
    {
        $categories = Category::all();
        return view('admin.pages.addCourses', compact('categories'));
    }
    public function AddCourse(Request $req)
    {
        $data = new Course;
        $data->name = $req->name;
        $data->description = $req->description;
        $data->instructor = $req->instructor;
        $data->duration = $req->duration;
        $data->category_id = $req->category_id;
        $data->start_date = $req->start_date;
        $data->end_date = $req->end_date;

        $data->price = $req->price;
        if ($req->hasFile('image')) {
            $data->image = $req->file('image')->store('images', 'public');
        }
        $data->save();
        return back();
    }
    public function Addcategory(Request $req)
    {
        $data = new Category;
        $data->name = $req->name;
        $data->save();
        // return redirect('/dashboard');
        return back();
    }
    public function courses()
    {
        $data = Course::all();
        return view('admin.pages.courses', compact('data'));
    }
    public function deletecourse($id)
    {
        $data = Course::find($id);
        $data->delete();
        return back();
    }
    public function showcourse($id)
    {
        $course = Course::find($id);
        return view('admin.pages.updateCourse', compact('course'));
    }
    public function updatecourse(Request $req, $id)
    {
        $data = Course::find($id);
        $data->name = $req->name;
        $data->description = $req->description;
        $data->instructor = $req->instructor;
        $data->duration = $req->duration;
        $data->start_date = $req->start_date;
        $data->end_date = $req->end_date;
        $data->price = $req->price;
        if ($req->hasFile('image')) {
            if (!empty($data->image) && Storage::disk('public')->exists($data->image)) {
                Storage::disk('public')->delete($data->image);
            }
            $data->image = $req->file('image')->store('images', 'public');
        }
        $data->save();
        return redirect('dashboard/courses');
    }
    public function home()
    {
        $categories = Category::all();
        $courses = Course::take(4)->get();
        return view('welcome', compact('categories', 'courses'));
    }
}
