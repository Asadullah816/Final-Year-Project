<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Register(Request $req)
    {
        $req->validate([
            "name" => "required",
            "email" => "required|unique:users,email",
            "password" => "required",
        ]);
        $data = new User;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = Hash::make($req->password);
        $data->save();
        return redirect()->back()->with('message', "Your Account has been Registered Successfully!");
    }
    public function Login(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials, $req->filled('remember'))) {
            $req->session()->regenerate();
            return redirect('/dashboard');
        }
        return back()->withErrors(['error' => "Invalid Credentials!"]);
    }
    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/login');
    }
}
