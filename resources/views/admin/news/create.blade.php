@extends('layouts.admin')
@section('title')
New Article  @parent
@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Article</h1>

    </div>

    @if ($errors->any())
        @foreach($errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>
        @endforeach
    @endif

    <form method="post" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="categories">Categories</label>
            <select class="form-control" multiple name="categories[]" id="categories">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}"/>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}"/>
            <label hidden for="user_id">user_id</label>
            <input hidden name="user_id" id="user_id" class="form-control" type="text" value="{{ old('user_id') }}">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" />
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status" id="status">
                <option @if(old('status') === 'DRAFT') selected @endif>DRAFT</option>
                <option @if(old('status') === 'ACTIVE') selected @endif>ACTIVE</option>
                <option @if(old('status') === 'BLOCKED') selected @endif>BLOCKED</option>
            </select>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body">{!! old('body') !!}</textarea>
        </div>

        <br />
        <button type="submit" class="btn btn-success">Save</button>
    </form>

@endsection