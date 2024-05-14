<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/header.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link @yield('menuHome')" href="{{ route('home') }}">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('menuDataset')" href="{{ route('dataset') }}"> dataset</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('menuMakeModel')" href="{{ route("make_model") }}">model</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('menuPrediction')" href="{{ route("prediction") }}">stroke prediction

                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')
      <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
