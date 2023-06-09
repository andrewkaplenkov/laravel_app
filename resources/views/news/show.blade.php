@extends('layouts/main')

@section('title') Article "{{$news['title']}}" @parent @stop

@section('content')
<div class="container">
    <div style="border: 2px solid black; margin-bottom: 5px">
        <h2>{{$news['title']}}</h2>
        <p>{{$news['author']}}</p>
        <p>{{$news['body'] }}</p>
        <span>{{$news['category']}}</span>
        <span>{{$news['created_at']}}</span>
    </div>
</div>
@endsection

