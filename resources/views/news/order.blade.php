@extends('layouts.main')

@section('content')
@section('title') Order @parent @stop

<div class="container">
    <form action="{{route('order.store')}}"  method="post">
        @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input  type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone" class="form-control" value="{{old('phone')}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="order">What do you want to get?</label>
        <input type="text" name="order" id="order" class="form-control" value="{{old('order')}}">
    </div>
    <hr>
    <button type="submit">Make order</button>
</form>
</div>

@endsection