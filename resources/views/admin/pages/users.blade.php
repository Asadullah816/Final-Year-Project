@extends('admin.adminlayout')
@section('title', 'Users')
@section('content')
    <div class="bg-secondary rounded h-100 p-4">
        @if (auth()->user()->admin == true)
            @if (count($user) > 0)
                <h6 class="mb-4">Courses Table</h6>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Email</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($user as $data)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->information->phone }}</td>
                                <td>
                                    <a href="{{ route('usersprofile', $data->id) }}"
                                        class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="{{ route('userDelete', $data->id) }}"
                                        class="btn btn-sm btn-sm-square btn-outline-primary m-2"><i
                                            class="fa fa-trash"></i></a>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            @else
                <h6 class="mb-4">No Users Available</h6>

            @endif
        @endif

    </div>
@endsection
