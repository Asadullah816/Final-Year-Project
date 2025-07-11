@extends('admin.components.header');
@section('title','Register')
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                        </a>
                        <h3>Sign Up</h3>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="floatingText"
                            placeholder="jhondoe">
                        <label for="floatingText">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation" placeholder="Password">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>

                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                    <p class="text-center mb-0">Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

@include('admin.components.footer')
