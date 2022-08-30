@extends('layouts.main')
@section('content')
    <div>
        @foreach ($posts as $post)
            <div>
                <a href="{{ route('posts.show', $post->id) }}"> {{ $post->id }} . {{ $post->title}} . {{ $post->category_id }}</a>

            </div>

        @endforeach
        <div><a href="{{ route('posts.create') }}" class="btn btn-primary">Create post</a>
    </div>
@endsection
