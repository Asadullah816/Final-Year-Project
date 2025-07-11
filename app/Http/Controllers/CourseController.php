<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function AddCourse(Request $req)
    {
        $data = new Course;
        $data->name = $req->name;
        $data->description = $req->description;
        $data->instructor = $req->instructor;
        $data->duration = $req->duration;
        $data->start_date = $req->start_date;
        $data->end_date = $req->end_date;
        $data->price = $req->price;
        $data->image = $req->file('image')->store('images', 'public');
        $data->save();
        return redirect('/dashboard');
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
            if ($req->image && Storage::disk('public')->exists($data->image)) {
                Storage::disk('public')->delete($data->image);
                $data->image = $req->file('image')->store('images', 'public');
            }
        }
        $data->save();
        return redirect('/courses');
    }
}
