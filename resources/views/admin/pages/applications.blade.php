@extends('admin.adminlayout')
@section('title', 'Applications')
@section('content')
    <div class="bg-secondary rounded h-100 p-4">
        @if (auth()->user()->admin == true)
            @if (count($applications) > 0)
                <h6 class="mb-4">Courses Table</h6>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($applications as $data)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->course->name }}</td>
                                <td>
                                    @if ($data->status == 'pending')
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @elseif($data->status == 'approved')
                                        <span class="badge bg-success">Approved</span>
                                    @else
                                        <span class="badge bg-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('application', $data->id) }}"
                                        class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i
                                            class="fa fa-eye"></i></a>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            @else
                <h6 class="mb-4">No Applications Available</h6>

            @endif
        @endif
        @if (auth()->user()->admin != true)
            @if (count(auth()->user()->applications) > 0)
                <h6 class="mb-4">Courses Table</h6>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse (auth()->user()->applications as $data)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->course->name }}</td>
                                <td>
                                    @if ($data->status == 'pending')
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @elseif($data->status == 'approved')
                                        <span class="badge bg-success">Approved</span>
                                    @else
                                        <span class="badge bg-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('application', $data->id) }}"
                                        class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i
                                            class="fa fa-eye"></i></a>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            @else
                <h6 class="mb-4">No Applications Available</h6>

            @endif
        @endif
    </div>
@endsection
