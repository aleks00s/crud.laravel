@extends('layouts.admin')
@section('content')
    @foreach ($posts as $post)
        <div>
            <div>
                <a href="{{ route('posts.show', $post->id) }}"> {{ $post->id }} . {{ $post->title}}</a>
            </div>
            @endforeach
            <div class="mt-3"><a href="{{ route('posts.create') }}" class="btn btn-primary">Create post</a></div>
            <div class="mt-3">
                {{ $posts->withQueryString()->links() }}
            </div>
        </div>
        @endsection
