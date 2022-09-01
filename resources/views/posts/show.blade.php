@extends('layouts.main')
@section('content')
    <div>
        <div>{{ $post->id }} . {{ $post->title}}</div>
        <div>{{ $post->content}}</div>
        <div class="mt-3"><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit post</a></div>
        <div class="mt-3"><a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a></div>

        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="mt-3">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-primary" value="Delete post">
        </form>

    </div>
@endsection
