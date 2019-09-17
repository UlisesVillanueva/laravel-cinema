<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="shortcut icon" href="img/ico.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title','Cinema')</title>
  </head>
  <body>

  


    <nav class="navbar navbar-light" style="background-color: #282828;">
      <a class="navbar-brand" href="{{ route('vistaPeliculas') }}">
    <img src="/img/logocine2.png"  alt="">
  </a>


</nav>


  <nav style="text-align: center; "class="navbar navbar-expand-sm bg-dark navbar-dark">

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" <a href="{{ route('vistaPeliculas') }}">Página Principal</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" <a href="{{ route('vistaPeliculas') }}">&nbsp&nbsp&nbspCatálogo Películas</a>
    </li>


    <li class="nav-item">
      <a class="nav-link" <a href="{{ route('vistaFunciones') }}">&nbsp&nbsp&nbsp&nbspPelículas en cartelera</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" <a href="{{ route('pelicula.create') }}">&nbsp&nbsp&nbsp&nbspRegistrar Película</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" <a href="{{ route('funcion.create') }}">&nbsp&nbsp&nbsp&nbspRegistrar Función</a>
    </li>
  </ul>

</nav>


    <div class="content">

      @yield('contenido')
    </div>
  </body>


  <style>
            html, body {
                background-color: white ;
               /* background-image: url('../img/back.jpg');
               */ color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }



nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
nav.navbar-findcond a { color: #f14444; }
nav.navbar-findcond ul.navbar-nav a { color: #f14444; border-style: solid; border-width: 0 0 2px 0; border-color: #fff; }
nav.navbar-findcond ul.navbar-nav a:hover,
nav.navbar-findcond ul.navbar-nav a:visited,
nav.navbar-findcond ul.navbar-nav a:focus,
nav.navbar-findcond ul.navbar-nav a:active { background: #fff; }
nav.navbar-findcond ul.navbar-nav a:hover { border-color: #f14444; }
nav.navbar-findcond li.divider { background: #ccc; }
nav.navbar-findcond button.navbar-toggle { background: #f14444; border-radius: 2px; }
nav.navbar-findcond button.navbar-toggle:hover { background: #999; }
nav.navbar-findcond button.navbar-toggle > span.icon-bar { background: #fff; }
nav.navbar-findcond ul.dropdown-menu { border: 0; background: #fff; border-radius: 4px; margin: 4px 0; box-shadow: 0 0 4px 0 #ccc; }
nav.navbar-findcond ul.dropdown-menu > li > a { color: #444; }
nav.navbar-findcond ul.dropdown-menu > li > a:hover { background: #f14444; color: #fff; }
nav.navbar-findcond span.badge { background: #f14444; font-weight: normal; font-size: 11px; margin: 0 4px; }
nav.navbar-findcond span.badge.new { background: rgba(255, 0, 0, 0.8); color: #fff; }
</html>



