@extends('admin.adminlayout')
@section('title', 'Application')
@section('content')
    <div class="container mt-4">
        <!-- 🟦 Application Info Card -->
        <div class="card shadow-sm border-0 mb-4">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Application Details</h4>
            </div>
            <div class="card-body bg-dark">
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">👤 User Name:</div>
                    <div class="col-md-8">{{ $application->user->information->first_name }}
                        {{ $application->user->information->middle_name ?? '' }}
                        {{ $application->user->information->last_name ?? '' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">📘 Course:</div>
                    <div class="col-md-8">{{ $application->course->name }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">📆 Applied On:</div>
                    <div class="col-md-8">{{ $application->created_at->format('d-m-y') }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">📌 Status:</div>
                    <div class="col-md-8">
                        @if ($application->status == 'pending')
                            <span class="badge bg-warning text-dark">Pending</span>
                        @elseif($application->status == 'approved')
                            <span class="badge bg-success">Approved</span>
                        @else
                            <span class="badge bg-danger">Rejected</span>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <!-- 📄 Qualifications Table -->
        <div class="card shadow-sm bg-dark border-0">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Qualifications</h5>
            </div>
            <div class="card-body bg-dark">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Qualification</th>
                            <th>Obtained Marks</th>
                            <th>Total Marks</th>
                            <th>% / GPA</th>
                            <th>Passing Year</th>
                            <th>Board Name</th>
                            <th>Institute Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($application->user->qualification as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->obtained_marks }}</td>
                                <td>{{ $data->total_marks }}</td>
                                <td>{{ $data->percentage }}</td>
                                <td>{{ $data->passing_year }}</td>
                                <td>{{ $data->board_name }}</td>
                                <td>{{ $data->institute_name }}</td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="#" class="btn btn-secondary btn-sm">⬅ Back</a>
        </div>
        @if (auth()->user()->admin == true)
            <div class="card-footer text-end">

                <form action="{{ route('status', $application->id) }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="status" value="approved">
                    <button type="submit" class="btn btn-success btn-sm">✅ Approve</button>
                </form>

                <form action="{{ route('status', $application->id) }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="status" value="rejected">
                    <button type="submit" class="btn btn-danger btn-sm">❌ Disapprove</button>
                </form>
            </div>
        @endif
    </div>

@endsection
