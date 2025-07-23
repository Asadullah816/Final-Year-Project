@extends('admin.adminlayout')
@section('title', 'Update Courses')
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
        <form action="{{ route('updatecourse', $course->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" name="name" value="{{ $course->name }}" id="name"
                    required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Course Description</label>
                <input type="text" class="form-control" name="description"value="{{ $course->description }}"
                    id="description" required>
            </div>
            <div class="mb-3">
                <label for="instructor" class="form-label">Course Instructor</label>
                <input type="text" class="form-control" name="instructor" value="{{ $course->instructor }}""
                    id="instructor" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Course duration</label>
                <input type="text" class="form-control" name="duration" value="{{ $course->duration }}" id="name">
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start date</label>
                <input type="date" class="form-control" name="start_date" value="{{ $course->start_date }}"
                    id="start_date">
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End date </label>
                <input type="date" class="form-control" name="end_date" value="{{ $course->end_date }}" id="end_date">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Course Price </label>
                <input type="number" class="form-control" name="price" value="{{ $course->price }}" id="price">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Course Thumbnail</label>
                <input class="form-control bg-dark" type="file" name="image" id="image">
                @if ($course->image)
                    <p>Current Image:</p>
                    <img src="{{ asset('storage/' . $course->image) }}" alt="Course Image" width="150">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div>

@endsection
