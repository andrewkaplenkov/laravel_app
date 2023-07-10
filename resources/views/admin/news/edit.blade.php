@extends('layouts.admin')
@section('title')
Edit  article "{{$news->title}}" @parent
@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit article</h1>

    </div>

    @if ($errors->any())
        @foreach($errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>
        @endforeach
    @endif

    <form method="post" action="{{ route('admin.news.update', ['news' => $news]) }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="categories">Categories</label>
            <select class="form-control" multiple name="categories[]" id="categories">
                @foreach($categories as $category)
                    <option @if(in_array($category->id, $news->categories->pluck('id')->toArray())) selected @endif value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $news->title }}"/>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{$news->user->name }}"/>
            <label hidden for="user_id">user_id</label>
            <input hidden name="user_id" id="user_id" class="form-control" type="text" value="{{ $news->user_id }}">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" />
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status" id="status">
                <option @if($news->status === 'draft') selected @endif>draft</option>
                <option @if($news->status === 'published') selected @endif>published</option>
                <option @if($news->status === 'blocked') selected @endif>blocked</option>
                <option @if($news->status === 'pending') selected @endif>pending</option>
            </select>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body">{!! $news->body !!}</textarea>
        </div>

        <br />
        <button type="submit" class="btn btn-success">Edit</button>
    </form>

@endsection