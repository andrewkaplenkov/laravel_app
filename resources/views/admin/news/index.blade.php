@extends('layouts.admin');

@section('title')
News @parent
@endsection


@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{__('News')}}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="{{route('admin.news.create')}}" class="btn btn-sm btn-outline-secondary">{{_('Add article')}}</a>
      </div>
    </div>
  </div>


  <h2>{{__('News List')}}</h2>
  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Author</th>
          <th scope="col">Status</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($news as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->title}}</td>
          <td>{{$item->user->name}}</td>
          <td>{{$item->status}}</td>
          <td class="d-flex flex-column">
            <a class="btn btn-primary" href="{{route('admin.news.edit', ['news' => $item->id])}}">Edit</a>
            <form method="POST" action="{{route('admin.news.destroy', ['news' => $item->id])}}">
              @method('delete')
              @csrf
              <input class="btn btn-danger" type="submit" value="Delete" />
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection


