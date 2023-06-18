@extends('layouts.main')

@section('content')
@section('title') News List @parent @stop

<div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($newsList as $key => $news)
        <div class="col">
            <div class="card shadow-sm">
              <img class="" src="{{$news->image}}" alt="">
              <div class="card-body">
                <h3 class="card-title "><a href="{{route('news.show', ['id' => $key])}}">{{ $news->title}}</a> </h3>
                <small class="text-body-secondary">{{$news->id}}</small>
                <p class="card-text">
                    <p>{{$news->body}}</p>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{route('news.show', ['id' => $key])}}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                  </div>
                <span>{{$news->author}}</span>
                  <small class="text-body-secondary">{{$news->created_at}}</small>
                </div>
              </div>
            </div>
          </div>
        @empty
            Feed is empty
        @endforelse
      
      
  </div>
    
@endsection
