@extends('layouts.main')
@section('content')
    <div>
        <h2>Create post</h2>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">

              <label for="title" class="form-label">Title</label>
              <input
                  type="text"
                  name="title"
                  class="form-control"
                  id="title"
                  placeholder="Title"
                  value="{{ old('title') }}">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea
                    type="text"
                    name="content"
                    class="form-control"
                    id="content"
                    placeholder="Content">{{ old('content') }}
                </textarea>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input
                    type="text"
                    name="image"
                    class="form-control"
                    id="image"
                    placeholder="Image"
                    value={{  old('title') }}>
              </div>
            <div>
                <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" aria-label="Category" name="category_id">
                @foreach($categories as $category)
                <option
                    {{ old('category_id') == $category->id ? ' selected' : ''}}
                    value="{{ $category->id }}">{{ $category->title }}
                </option>
                @endforeach
            </select>
            </div>
            <br>
            <div>
                <label for="tags" class="form-label">Tags</label>
                <select class="form-select" multiple id="tags" name="tags[]">
                    @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>

            </div>
            <div>
                <br>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </form>
    </div>
@endsection
