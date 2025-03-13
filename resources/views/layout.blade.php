<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VizsgáZOO</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/mystyle.css')}}">
    <link href="{{asset('assets/fontawesome/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fontawesome/css/solid.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="img/zoo.png" type="image/x-icon">
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
</head>
<body class="bg-light">
    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark container px-2">
          <i class="fa-solid fa-hippo me-2"></i><a class="navbar-brand" href="/">VizsgáZoo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/emlosok">Emlősök</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/madarak">Madarak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/hullok">Hüllők</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/hirlevel">Hírlevél</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>

    @yield('content')

    <footer class="container-fluid text-center">
        <div class="container py-3">
        <hr>
        <p>Készítette: Csőke Balázs Zsolt - 13.A</p>
        </div>
    </footer>
    </body>
    </html>
