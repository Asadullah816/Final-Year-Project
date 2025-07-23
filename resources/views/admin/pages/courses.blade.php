@extends('admin.adminlayout')
@section('title', 'Courses')
@section('content')
    <div class="bg-secondary rounded h-100 p-4">
        @if (count($data) > 0)
            <h6 class="mb-4">Courses Table</h6>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Instructor Name</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $data)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->instructor }}</td>
                            <td>{{ $data->duration }}</td>
                            <td>
                                <a href="{{ route('updatecourse', $data->id) }}"
                                    class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i class="fa fa-edit "></i></a>
                                <a href="{{ route('deletecourse', $data->id) }}"
                                    class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i class="fa fa-trash"></i></a>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        @else
            <h6 class="mb-4">No Courses Available</h6>
            <a href="{{ route('addcourse') }}" type="button" class="btn btn-outline-danger m-2">Add Course</a>
        @endif
    </div>
@endsection
