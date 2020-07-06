<h1>
    tailwind create
</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Title">
        @error('title')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="body">Body</label>
        <textarea name="body" id="body" placeholder="Body" rows="10"></textarea>
        @error('body')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Create Post</button>
</form>