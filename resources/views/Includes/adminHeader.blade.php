<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css')}}/style.css">
    <style type="text/css">
      .card{
        margin: 0 auto;
        float: none;
        margin-bottom: 10px;
      }
    </style>
    <title>Welcome To Mero Lens</title>

   
  </head>
  <body style="margin-top:0px;">

  <div class="container-fluid" style="background-color: white !important">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images') }}/logo.jpg" style="width: 100px; height: 60px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('products') }}">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('orders') }}">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dispatchedOrder') }}">Dispatched Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('holdedOrder') }}">Hold Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('clients') }}">Clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users') }}">Users</a>
      </li>
     
    </ul>
  </div>
  <ul class="navbar-nav" style="float: right;">
        <li style="margin-right: 30px;">{{ Auth::user()->name }}</li>
        <li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="float: right;">
            @csrf
            <input type="submit" name="" value="Logout" style="background-color: #fff; border: none; color: blue;">
          </form></li>
    </ul>
</nav>

    </div>
  </div>
