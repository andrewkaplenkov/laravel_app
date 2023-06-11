@extends('layouts/admin')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add article</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>
        @endforeach
    @endif

    <form action="{{route('admin.news.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input  type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" id="author" class="form-control" value="{{old('author')}}">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" name="body" id="body" class="form-control" value="{{old('body')}}">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <input type="text" name="category" id="category" class="form-control" value="{{old('category')}}">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control" >
    </div>
    <hr>
    <button type="submit">Publish</button>
</form>
</div>
@endsection