@extends('admin.adminlayout')
@section('title', 'Add Categories')
@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>{{ $error }}
                <button type="button" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add Courses</h6>
        <form action="{{ route('addcategory') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>

@endsection
