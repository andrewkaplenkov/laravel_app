@extends('layouts/admin')

@section('content')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Admin dashboard</h1>
        
      </div>
      <div class="d-block btn-group me-2">
        <x-alert :type="request()->get('type', 'danger')" message="Some message"></x-alert>
    </div>

@endsection