<!-- layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>App Name - @yield('title')</title>
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />
</head>
<body>
  <div class="container">
      <div class="page-header">
        @yield('header')
      </div>

      @if (Session::has('success'))
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
      @endif

      @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>