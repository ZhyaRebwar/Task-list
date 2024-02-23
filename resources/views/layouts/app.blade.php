<!DOCTYPE html>
<html>

<head>
  <title>Laravel 10 Task List App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">  
  @yield('styles')
</head>

<body class="container d-flex flex-column align-items-center text-center">
  <h1 class="mt-2">@yield('title')</h1>
  <div class="col-6 d-flex flex-column">
    @if ( session()->has('success') )
      <div class="text-primary m-2">{{ session('success') }}</div>
    @endif
      
    @yield('content')
  </div>
</body>

</html>