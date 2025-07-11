@include('components.header')
<form action="{{ route('addpost') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title" required>
    </div>

    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea name="body" class="form-control" id="body" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@include('components.footer')
