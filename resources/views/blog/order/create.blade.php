@extends('layouts.main')
@section('title')
Make order @parent
@endsection


@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

    <form method="post" action="{{ route('order.store') }}" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"/>
            @error('name')
            <x-alert type="danger" :message="$message"></x-alert>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" name="phone" id="phone" class="form-control" value="{{ old('phone') }}"/>
            @error('phone')
            <x-alert type="danger" :message="$message"></x-alert>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"/>
            @error('email')
            <x-alert type="danger" :message="$message"></x-alert>
            @enderror
        </div>
        <div class="form-group">
            <label for="message">What do you want to get?</label>
            <textarea class="form-control" name="message" id="message">{!! old('message') !!}</textarea>
            @error('message')
            <x-alert type="danger" :message="$message"></x-alert>
            @enderror
        </div>

        <br />
        <button type="submit" class="btn btn-success">Make order</button>
    </form>
    
  </div>
@endsection