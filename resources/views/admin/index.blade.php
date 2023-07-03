@extends('layouts.admin')

@section('title')
Homepage @parent
@endsection

@section('content')
<div class="container">
    <h1 class="h2 mb-5 py-5 border-bottom">{{__('Homepage')}}</h1>
    {{-- <x-alert :type="request()->get('type')" message="SOME MESSAGE"></x-alert> --}}
    <x-alert type="warning" message="WARNING"></x-alert>
</div>
    
@endsection