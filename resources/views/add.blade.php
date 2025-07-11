@include('components.header')
<div class="container">
    <h2 class="mb-4">Student Information Form</h2>

    <form class="mb-3" action="{{ route('add') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div>

        <div class="mb-3">
            <label for="roll" class="form-label">Roll Number:</label>
            <input type="text" class="form-control" id="roll" name="roll_no" placeholder="Enter Roll Number">
        </div>
        <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>
@include('components.footer')
