<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Post;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDO;

class HomeController extends Controller
{
    public function Index()
    {
        $data = "This is data from Controller";
        return view('welcome', compact('data'));
    }
    public function Add(Request $req)
    {
        $data = new Task;
        $data->name = $req->name;
        $data->roll_no = $req->roll_no;
        $data->save();
        return redirect("/");
    }
    public function Show()
    {
        $data = Task::all();
        $user = Auth::user();
        if ($user) {
            $posts = $user->posts()->get();
            return view("welcome", compact("data", "posts"));
        }
        return view("welcome", compact("data"));
    }
    public function ShowUpdate($id)
    {
        $data = Task::find($id);
        return view("update", compact("data"));
    }

    public function update(Request $req)
    {
        $data = Task::find($req->id);
        $data->name = $req->name;
        $data->roll_no = $req->roll_no;
        $data->save();
        return redirect("/");
    }
    public function delete($id)
    {
        $data = Task::find($id);
        $data->delete();
        return redirect("/");
    }

    public function AddPost(Request $req)
    {
        $user = Auth::user();
        $post = new Post;
        $post->title = $req->title;
        $post->body = $req->body;
        $user = $user->posts()->save($post);
        return redirect('/');
    }
    public function vieweditpost($id)
    {
        $post = Auth::user()->posts()->find($id);
        return view('pages/editpost', compact('post'));
    }
    public function editpost(Request $req)
    {
        $post = Auth::user()->posts()->find($req->id);
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();
        return redirect('/');
    }

    public function deletePost($id)
    {
        $post = Auth::user()->posts()->find($id);
        $post->delete();
        return redirect()->back();
    }
    
    public function mail(Request $req)
    {
        $mail = [
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message,
        ];  
        Mail::to('asadullah.dev.web@gmail.com')->send(new TestMail($mail));
        Mail::to($req->email)->send(new TestMail($mail));
        return redirect()->back()->with('message', 'Email send Successfully!');
    }
}
