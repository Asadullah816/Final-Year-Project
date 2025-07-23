@extends('admin.adminlayout')

@section('content')
    <div class="container-fluid pt-4 px-4">
      
      @if(auth()->user()->admin == true)
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
                        <h6 class="mb-0">0</h6>
                    </div>
                </div>
            </div>
        </div>
        @else
         <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chalkboard-teacher fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Applications</p>
                        <h6 class="mb-0">0</h6>
                    </div>
                </div>
            </div>
      @endif

    </div>
@endsection
