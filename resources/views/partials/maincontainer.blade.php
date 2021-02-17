<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.23/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/cr-1.5.3/fc-3.3.2/fh-3.1.8/kt-2.6.0/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.1/datatables.min.css"/>
      <title>Allavoy</title>


  </head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand pr-2" href="#">Allavoy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      @auth
      @if(Auth::user()->hasRole(['administrador']))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('orders.add') }}">Nueva orden</a>
      </li>
      @endif
      @if(Auth::user()->hasRole(['administrador']))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('orders.list') }}">Lista</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ route('orders.jobs')}}">Ordenes pendientes</a>
      </li>
      @if(Auth::user()->hasRole(['administrador']))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('friendshops.add')}}">Nuevo local</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ route('friendshops.list') }}">Lista locales</a>
      </li>
      @if(Auth::user()->hasRole(['administrador']))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.register') }}">Registrar</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.list') }}">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">{{auth()->user()->name}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout')}}" >Logout</a>
      </li>
      @endauth
    </ul>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>


        @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</html>


