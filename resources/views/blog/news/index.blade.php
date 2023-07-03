@extends('layouts.main')
@section('title')
News List @parent
@endsection


@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

  @foreach ($news as $item)
  <div class="col">
    <div class="card shadow-sm">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
      <div class="card-body">
        <h4 ><a class="text-decoration-none " href="{{route('news.show', ['news' => $item ])}}">{{$item->title}}</a></h4>
        <p class="card-text">{{$item->user->name}}</p>
        <p class="card-text">{{$item->body}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <small class="text-body-secondary">{{$item->created_at->format('d-m-Y')}}</small>
          <small class="text-body-secondary">
         @if ($item->categories)
             @foreach ($item->categories as $category)
                 <p>{{$category->title}}</p>
             @endforeach
         @endif
          </small>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  

    
  </div>
@endsection