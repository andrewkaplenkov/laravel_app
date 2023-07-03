@extends('layouts.main')
@section('title')
Feedback @parent
@endsection


@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

    <form method="post" action="{{ route('feedback.store') }}" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"/>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message">{!! old('message') !!}</textarea>
        </div>

        <br />
        <button type="submit" class="btn btn-success">Leave feedback</button>
    </form>
    
  </div>
@endsection