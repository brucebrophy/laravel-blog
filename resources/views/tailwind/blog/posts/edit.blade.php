<h1>
    tailwind edit
</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" placeholder="Title">
        @error('title')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="body">Body</label>
        <textarea name="body" id="body" placeholder="Body" rows="10">
            {{ $post->body }}
        </textarea>
        @error('body')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Update Post</button>
</form>