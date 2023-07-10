@extends('layouts.admin');

@section('title')
Sources @parent
@endsection


@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{__('News')}}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      {{-- <div class="btn-group me-2">
        <a href="{{route('admin.news.create')}}" class="btn btn-sm btn-outline-secondary">{{_('Add article')}}</a>
      </div> --}}
    </div>
  </div>


  <h2>Section title</h2>
  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Url</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sources as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          </td>
          <td>{{$item->url}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection


