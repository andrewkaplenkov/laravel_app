<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Admin :: @section('title') @show</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>


<x-admin.header></x-admin.header>

<div class="container-fluid">
  <div class="row">
   
    <x-admin.sidebar ></x-admin.sidebar>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      @yield('content')
    
    </main>
  </div>
</div>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}" ></script>

{{-- <script src="{{asset('assets/js/dashboard.js')}}"></script> --}}
</body>
</html>
