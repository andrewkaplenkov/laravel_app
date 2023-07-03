
@extends('layouts.main')


@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

    <div class="col">
      <div class="card shadow-sm">
        <div class="container">
          <h2>{{ $news->title }}</h2>
          <h4>{{ $news->user->name }} ({{ $news->created_at->format('d-m-Y') }})</h4>
          <p>{!! $news->body !!}</p>
        </div>
      </div>
    </div>

    
  </div>
@endsection