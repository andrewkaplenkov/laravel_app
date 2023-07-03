@extends('layouts.admin');

@section('title')
Order @parent
@endsection


@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{__('Orders')}}</h1>
    {{-- <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="{{route('admin.news.create')}}" class="btn btn-sm btn-outline-secondary">{{_('Add article')}}</a>
      </div>
    </div> --}}
  </div>


  <h2>{{__('Orders List')}}</h2>
  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Message</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->phone}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->message}}</td>
          <td class="d-flex flex-column">
            <form method="POST" action="{{route('admin.orders.destroy', ['order' => $item->id])}}">
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


