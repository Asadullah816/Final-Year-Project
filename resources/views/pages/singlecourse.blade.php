@extends('layout.layout')
@section('content')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* A clean, common font */
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
            /* Light background */
        }

        .top-con {
            padding-top: 150px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
            /* A stronger heading font for emphasis */
            font-weight: 700;
            font-size: 3rem;
            color: #212529;
        }

        /* Container and Card Styling */
        .course-image-container {
            max-height: 500px;
            /* Limit image height */
            display: flex;
            /* Helps center image if it's smaller */
            justify-content: center;
            align-items: center;
            background-color: #e9ecef;
            /* Light background if image doesn't fill */
        }

        .course-main-image {
            width: 100%;
            height: auto;
            display: block;
            /* Remove extra space below image */
            object-fit: cover;
            /* Ensures image covers container without distortion */
            max-height: 500px;
            /* Keep image within container height */
        }

        .course-details-card {
            background-color: #fff;
            border: 1px solid #dee2e6;
            /* Light border */
        }

        /* Text and Icon Styling */
        .course-description {
            font-size: 1.5rem;
            color: #555;
        }

        .course-details-card p {
            margin-bottom: 1.5rem;
            /* Space out lines slightly */
        }

        .course-details-card p strong {
            color: #000;
            font-size: 1.5rem;
        }

        .course-details-card .fa-solid,
        .course-details-card .fas {
            font-size: 2.2rem;
            vertical-align: middle;
        }

        /* Customizing Bootstrap Elements */
        .text-primary {
            color: #007bff !important;
            /* Bootstrap primary blue, adjust if you have a brand color */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 2rem;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Responsive Adjustments (Bootstrap handles most of this) */
        @media (max-width: 767.98px) {
            .course-image-container {
                max-height: 300px;
                /* Smaller image on mobile */
            }
        }
    </style>

    <div class="container my-5 top-con">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <i class="fa fa-exclamation-circle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-exclamation-circle me-2"></i>{{ $error }}
                        <button type="button" class="btn-close text-danger" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endforeach
            @endif
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="course-image-container shadow-lg rounded-3 overflow-hidden">
                    <img src="{{ asset('storage/' . $course->image) }}" alt="Course Name Thumbnail"
                        class="img-fluid course-main-image">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="course-details-card p-4 shadow-sm rounded-3">
                    <h1 class="mb-3 text-primary">{{ $course->name }}</h1>
                    <p class="lead text-muted">By <strong class="text-dark">{{ $course->instructor }}</strong></p>

                    <hr>

                    <p class="course-description mb-4">
                        {{ $course->description }}
                    </p>

                    <div class="row mb-3">
                        <div class="col-6">
                            <p class="mb-1"><i class="fas fa-clock text-info me-2"></i> <strong>Duration:</strong></p>
                            <p class="fw-bold">{{ $course->duration }}</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-1"><i class="fas fa-dollar-sign text-success me-2"></i>
                                <strong>Price:</strong>
                            </p>
                            <p class="fw-bold">{{ $course->price }}</p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <p class="mb-1"><i class="fas fa-calendar-alt text-warning me-2"></i> <strong>Start
                                    Date:</strong></p>
                            <p class="fw-bold">{{ $course->start_date }}</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-1"><i class="fas fa-calendar-check text-danger me-2"></i> <strong>End
                                    Date:</strong></p>
                            <p class="fw-bold">{{ $course->end_date }}</p>
                        </div>
                    </div>
                    <form action="{{ route('apply') }}" method="POST">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                        <button type="submit" class="cus-btn qual-btn">Enroll Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
