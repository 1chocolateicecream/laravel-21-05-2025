<x-app-layout>
    <a href="/posts">All posts</a>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>

    @if ($post->image_path)
    <img src="{{ asset('storage/' . $post->image_path) }}" alt="post image" style="max-width: 300px;">
    @endif
</x-app-layout>
