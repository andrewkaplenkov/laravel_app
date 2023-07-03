@extends('layouts.admin');

@section('title')
Categories @parent
@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{__('Categories')}}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="{{route('admin.categories.create')}}" class="btn btn-sm btn-outline-secondary">{{_('Add category')}}</a>
      </div>
      </button>
    </div>
  </div>


  <h2>Categories list</h2>
  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->title}}</td>
          <td>{{$item->description}}</td>
          <<td class="d-flex flex-column">
            <a href="{{route('admin.categories.edit', ['category' => $item->id])}}">Edit</a>
            <form method="POST" action="{{route('admin.categories.destroy', ['category' => $item->id])}}">
              @method('delete')
              @csrf
              <button  class="btn btn-primary" type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection


