@extends('layout.layout')
@section('title', 'Personal Information')
@section('content')
    <div class="container-fluid page-hero-container d-flex justify-content-center align-items-center">
        <div class="container d-flex justify-content-center align-itmes-center">
            <div class="page-hero">
                <div class="page-hero-heading">
                    <h2>
                        Personal Information
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="register-form py-5 d-flex justify-content-center align-items-center flex-column">
            <h2 class="heading">Personal Information Form</h2>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <i class="fa fa-exclamation-circle me-2"></i>{{ $error }}
                        <button type="button" class="btn-close text-danger" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endforeach
            @endif
            <form action="{{ route('addinfo') }}" method="POST"
                class="reg-form d-flex justify-centent-center align-items-center flex-column">
                @csrf
                <div class="input-dev row w-100">
                    <div class="col-12 col-md input-dev">
                        <input type="text" class="reg-inp" name="first_name" placeholder="First Name">
                    </div>
                    <div class="col-12 col-md input-dev">
                        <input type="text" class="reg-inp" name="middle_name" placeholder="Middle Name">
                    </div>
                    <div class="col-12 col-md input-dev">
                        <input type="text" class="reg-inp" name="last_name" placeholder="Last Name">
                    </div>

                </div>

                <div class="input-dev select-dev row w-100">
                    <input type="date" class="reg-inp" name="date_of_birth" placeholder="Date of birth">
                </div>
                <div class="input-dev row w-100">
                    <div class="col-12 col-md input-dev">
                        <input type="email" class="reg-inp" name="email" placeholder="Email ">
                    </div>
                    <div class="col-12 col-md input-dev">
                        <input type="number" class="reg-inp" name="phone" placeholder="Phone Number">
                    </div>
                </div>
                <div class="input-dev select-dev row w-100">
                    <input type="text" class="reg-inp" name="permanent_address" placeholder="Permanent address">
                </div>
                <div class="input-dev select-dev row w-100">
                    <input type="text" class="reg-inp" name="current_address" placeholder="Current address">
                </div>
                <div class="input-dev row w-100">
                    <div class="col-12 col-md input-dev">
                        <input type="text" class="reg-inp" name="city" placeholder="City ">
                    </div>
                    <div class="col-12 col-md input-dev">
                        <input type="text" class="reg-inp" name="state" placeholder="State">
                    </div>
                </div>
                <div class="input-dev select-dev row w-100">
                    <input type="number" class="reg-inp" name="emergency_number" placeholder="Emergency Number">
                </div>

                <div class="form-btn d-flex justify-centent-center align-items-center flex-column">
                    <button type="submit" class="cus-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
