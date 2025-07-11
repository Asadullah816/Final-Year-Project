@extends('admin.adminlayout')
@section('title', 'addcourses')
@section('content')
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add Courses</h6>
        <form action="{{ route('addcourse') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Course Description</label>
                <input type="text" class="form-control" name="description" id="description" required>
            </div>
            <div class="mb-3">
                <label for="instructor" class="form-label">Course Instructor</label>
                <input type="text" class="form-control" name="instructor" id="instructor" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Course duration</label>
                <input type="text" class="form-control" name="duration" id="name">
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start date</label>
                <input type="date" class="form-control" name="start_date" id="start_date">
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End date </label>
                <input type="date" class="form-control" name="end_date" id="end_date">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Course Price </label>
                <input type="number" class="form-control" name="price" id="price">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Course Thumbnail</label>
                <input class="form-control bg-dark" type="file" name="image" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Add Course</button>
        </form>
    </div>

@endsection
