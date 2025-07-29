<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;
use App\Models\Qualification;
use App\Models\Course;
use App\Models\Information;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnrollmentMail;
use App\Mail\NewApplicationNotification;
use App\Mail\StatusUpdateMail;
use App\Mail\UserDeletedMail;
use PDO;

class CourseController extends Controller
{
    public function index()
    {
        $authuser = Auth::user();
        $courses = Course::all()->count();
        $user = User::where('admin', false)->get()->count();
        $applications = Application::all();
        $categories = Category::all()->count();
        $userapplication = $authuser->applications;
        $userappcount = $authuser->applications->count();
        return view('admin.dashboard', compact('courses', 'user', 'categories', 'userapplication', 'userappcount', 'applications'));
    }
    public function Users()
    {
        $user = User::where('admin', 0)->get();
        return view('admin.pages.users', compact('user'));
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
    public function singleCourse($id)
    {
        $course = Course::find($id);
        return view('pages.singlecourse', compact('course'));
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
    public function qualification(Request $req)
    {

        $user = Auth::user();
        foreach ($req->qualification as  $data) {
            $qual = new Qualification;
            $qual->user_id = $user->id;
            $qual->name = $data['name'];
            $qual->obtain_marks = $data['obtain_marks'];
            $qual->total_marks = $data['total_marks'];
            $qual->percentage = $data['percentage'];
            $qual->passing_year = $data['passing_year'];
            $qual->board_name = $data['board_name'];
            $qual->institute_name = $data['institute_name'];
            $qual->save();
        }
        return back();
    }
    public function profile()
    {
        $user = Auth::user();
        $profile = $user->qualification;
        return view('admin.pages.profile', compact('user', 'profile'));
    }
    public function usersprofile($id)
    {

        $user = User::find($id);
        return view('admin.pages.usersprofile', compact('user'));
    }
    public function userDelete($id)
    {
        $user = User::find($id);
        $userEmail = $user->email;
        $userName = $user->name;
        Mail::to($userEmail)->send(new UserDeletedMail($userName));
        $user->delete();
        return back()->with('success', 'User has been deleted successfully');
    }
    public function home()
    {
        $categories = Category::all();
        $courses = Course::take(4)->get();
        return view('welcome', compact('categories', 'courses'));
    }
    public function information(Request $req)
    {
        $user = Auth::user();
        $existing = Information::where('user_id', $user->id)->first();

        if ($existing) {
            return redirect('dashboard')->with('error', 'Information already added!');
        }
        $info = new Information;
        $info->user_id = $user->id;
        $info->first_name = $req->first_name;
        if ($req->has('middle_name')) {
            $info->middle_name = $req->middle_name;
        }
        if ($req->has('last_name')) {
            $info->last_name = $req->last_name;
        }
        $info->date_of_birth = $req->date_of_birth;
        $info->phone = $req->phone;
        $info->permanent_address = $req->permanent_address;
        $info->current_address = $req->current_address;
        $info->city = $req->city;
        $info->state = $req->state;
        $info->emergency_number = $req->emergency_number;
        $info->save();
        return redirect('dashboard');
    }
    public function apply(Request $req)
    {
        $user = Auth::user();
        $application = new Application;
        $alreadyApplied = Application::where('user_id', $user->id)
            ->where('course_id', $req->course_id)
            ->first();
        if (!$user->information) {
            return redirect()->back()->with('error', 'Please complete your personal information before applying.');
        }
        if ($alreadyApplied) {
            return back()->with('error', 'You have already applied for this course.');
        }
        $application->user_id = $user->id;
        $application->course_id = $req->course_id;
        $application->save();
        Mail::to($user->email)->send(new EnrollmentMail($user, $application));
        Mail::to('asadullah.dev.web@gmail.com')->send(new NewApplicationNotification($user, $application));
        return back()->with('success', 'Your application has been submitted.');
    }
    public function applications()
    {
        $user = Auth::user();
        $applications = Application::all();
        $userapplication = $user->applications;
        $info = $user->information;
        return view('admin.pages.applications', compact('applications', 'userapplication', 'info'));
    }
    public function application($id)
    {
        $user = Auth::user();
        $application = Application::find($id);
        return view('admin.pages.viewapplication', compact('application'));
    }
    public function approved(Request $req, $id)
    {
        $application = Application::find($id);
        $application->status = $req->status;
        $application->save();
        Mail::to($application->user->email)->send(new StatusUpdateMail($application->user, $application));
        return back()->with('success', "Application status has been updated!");
    }
}
