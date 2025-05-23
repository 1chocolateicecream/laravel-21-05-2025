<x-app-layout>
    <h1>All posts</h1>
    <a href="{{ route('posts.create') }}">Create post</a>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="{{ route('posts.show', $post->id) }}">Show</a>
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                    </form>
                </div>
                    @if ($post->image_path)
                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="post image" style="max-width: 150px;">
                    @endif
            </li>
        @endforeach
    </ul>
</x-app-layout>
