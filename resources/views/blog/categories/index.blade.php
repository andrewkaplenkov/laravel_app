@extends('layouts.main')
@section('title')
Categories List @parent
@endsection


@section('content')


  @foreach ($categories as $item)
  <div class="col my-3">
    <div class="card shadow-sm">
      <h4><a href="">{{$item->title}}</a></h4>
      <p>{{$item->description}}</p>
    </div>
  </div>
  @endforeach
  

    
@endsection