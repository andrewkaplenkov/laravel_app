
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>@section('title') :: NewsPortal @show </title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  </head>
  <body>

<x-blog.header></x-blog.header>

<main>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      
      @yield('content')

    </div>
  </div>

</main>

<x-blog.footer></x-blog.footer>

<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}" ></script>


    </body>
</html>
