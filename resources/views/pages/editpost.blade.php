@include('components.header')
<form action="{{ route('editpost') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $post->id }}">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" value="{{ $post->title }}" class="form-control" id="title" required>
    </div>

    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea name="body" class="form-control" id="body" rows="5" required>{{ $post->body }}
        </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@include('components.footer')
