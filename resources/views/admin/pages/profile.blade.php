@extends('admin.adminlayout')
@section('title', 'Profile')
@section('content')
    <div class="bg-secondary rounded h-100 p-4">
        @if (count($profile) > 0)
            <h6 class="mb-4">Courses Table</h6>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Qualification</th>
                        <th scope="col">Obtain Marks</th>
                        <th scope="col">Total Marks</th>
                        <th scope="col">Percentage/GPA</th>
                        <th scope="col">Year of Passing</th>
                        <th scope="col">Board Name</th>
                        <th scope="col">Institute Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($profile as $data)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->obtain_marks }}</td>
                            <td>{{ $data->total_marks }}</td>
                            <td>{{ $data->percentage }}</td>
                            <td>{{ $data->passing_year }}</td>
                            <td>{{ $data->board_name }}</td>
                            <td>{{ $data->institute_name }}</td>

                            <td>
                                {{-- <a href="{{ route('updatecourse', $data->id) }}"
                                    class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i class="fa fa-edit "></i></a> --}}
                                <a href="" class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i
                                        class="fa fa-trash"></i></a>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        @else
            <h6 class="mb-4">No Qualification Added</h6>
            <a href="{{ route('qualification') }}" type="button" class="btn btn-outline-danger m-2">Add Qualifications</a>
        @endif
    </div>
@endsection
