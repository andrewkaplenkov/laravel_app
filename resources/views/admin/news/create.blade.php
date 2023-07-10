@extends('layouts.admin')
@section('title')
New Article  @parent
@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Article</h1>

    </div>

    <form method="post" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="categories">Categories</label>
            <select class="form-control" multiple name="categories[]" id="categories">
                @foreach($categories as $category)
                    <option 
                    value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            @error('categories')
            <x-alert type="danger" :message="$message"></x-alert>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}"/>
            @error('title')
            <x-alert type="danger" :message="$message"></x-alert>
            @enderror
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}"/>
            @error('author')
            <x-alert type="danger" :message="$message"></x-alert>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" />
        </div>
        
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body">{!! old('body') !!}</textarea>
            @error('body')
            <x-alert type="danger" :message="$message"></x-alert>
            @enderror
        </div>

        <br />
        <button type="submit" class="btn btn-success">Publish</button>
    </form>

@endsection