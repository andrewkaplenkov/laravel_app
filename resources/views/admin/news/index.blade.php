@extends('layouts/admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">News</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="{{route('admin.news.create')}}" type="button" class="btn btn-sm btn-outline-secondary">Add article</a>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <td>#ID</td>
            <td>Title</td>
            <td>Author</td>
            <td>Status</td>
            <td>Created At</td>
          </tr>
          @foreach ($newsList as $news)
          <tr>
                <td>{{$news->id}}</td>
                <td>{{$news->title}}</td>
                <td>{{$news->author}}</td>
                <td>{{$news->status}}</td>
                <td>{{$news->created_at}}</td>
              </tr>
              @endforeach
        </table>
      </div>
</div>
@endsection