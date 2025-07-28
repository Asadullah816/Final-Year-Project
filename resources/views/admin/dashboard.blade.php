@extends('admin.adminlayout')

@section('content')
    <div class="container-fluid pt-4 px-4">
        @if (session('error'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (auth()->user()->admin == true)
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chalkboard-teacher fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Courses</p>
                            <h6 class="mb-0">{{ $courses }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-layer-group fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Categories</p>
                            <h6 class="mb-0">{{ $categories }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-users fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Users</p>
                            <h6 class="mb-0">{{ $user }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-file-alt fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Application</p>
                            <h6 class="mb-0">{{ $applications->count() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col-sm-6 col-xl-3">
                <a href="">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chalkboard-teacher fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Applications</p>
                            <h6 class="mb-0">{{ $userappcount }}</h6>
                        </div>
                    </div>
                </a>
            </div>
        @endif

    </div>
@endsection
