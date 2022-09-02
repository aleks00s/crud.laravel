@extends('layouts.main')
@section('content')
    @can('view', auth()->user())
        <div class="mt-3">
            <a href="{{ route('admin.posts.index') }}">Admin</a>
        </div>
    @endcan

        @foreach ($posts as $post)
            <div class="mt-3">
                <a href="{{ route('posts.show', $post->id) }}"> {{ $post->id }} . {{ $post->title}}</a>
            </div>
        @endforeach
        <div class="mt-3"><a href="{{ route('posts.create') }}" class="btn btn-primary">Create post</a></div>
        <div class="mt-3">
            {{ $posts->withQueryString()->links() }}
        </div>
@endsection
