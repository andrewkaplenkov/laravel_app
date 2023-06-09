@extends('layouts.main')

@section('content')
@section('title') Categories @parent @stop

@foreach ($categories as $category)
<ul>
    <li><a href="<?= route('news.filtered', ['category' => $category]) ?>"><?= $category ?></a></li>
</ul>
@endforeach

@endsection