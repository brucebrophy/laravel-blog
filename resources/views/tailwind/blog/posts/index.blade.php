<h1>
    tailwind index
</h1>

<ul>
    @foreach($posts as $post)
        <li>
            <div>{{ $post->title }}</div>
            <div>{{ $post->body }}</div>
        </li>
    @endforeach
</ul>