<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
<x-app-layout>
    <h1>Create post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="content">Content: </label>
            <textarea name="content" id="content">{{ old('content') }}</textarea>
            @error('content')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="image">Image: </label>
            <input type="file" name="image" id="image">
            @error('image')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <br>
        <input type="submit" value="Create">
    </form>
</x-app-layout>
</body>
</html>