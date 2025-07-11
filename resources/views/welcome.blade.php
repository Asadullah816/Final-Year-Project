@include('components.header')
<div class="container">
    <h4>Student Records</h4>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Roll Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->roll_no }}</td>
                    <td>
                        <a href="{{ route('showupdate', $data->id) }}" class="btn btn-primary">Update</a>
                        <a href="{{ route('delete', $data->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container d-flex justify-content-center align-items-center">
        <a href="{{ route('add') }}" class="btn btn-success">Add New Record</a>
    </div>

    <h1>
        @auth
            User {{ Auth::user()->name }} Posts
            @if ($posts)
                <div class="row gap-3 container mt-5">
                    @foreach ($posts as $post)
                        <div class="col-3 card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $post->title }}</h3>
                                <hr>
                                <p class="card-text" style="white-space: pre-line; font-size:16px;">{{ $post->body }}</p>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('viewedit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('deletepost', $post->id) }}" class="btn btn-sm btn-danger">Delete</a>

                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endauth
        <div class="container d-flex justify-content-center align-items-center">
            <a href="{{ route('addpost') }}" class="btn btn-success">Create Post</a>
        </div>

    </h1>
</div>

@include('components.footer')
