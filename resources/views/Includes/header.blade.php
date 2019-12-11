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
      .checked {
        color: orange;
      }
    </style>
    <title>Welcome To Mero Lens</title>
  </head>
  <body style="margin-top:0px;">

  <!--first nav-->
    <div class="container-fluid" style="background-color: #eaf0f7!important">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #eaf0f7!important">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <h6 style="color:#083a80"><i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;+977-98754346&nbsp;&nbsp;&nbsp;|&nbsp;</h6>
            </li>&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
              <h6 style="color:  #083a80">Location:- Kathmandu, Nepal</h6>
            </li>
            
          </ul>
          <i class="fa fa-facebook fa-lg" style="color:  #083a80"></i>&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fa fa-twitter fa-lg" style="color:  #083a80"></i>&nbsp;&nbsp;&nbsp;&nbsp;
          
          <i class="fa fa-instagram fa-lg" style="color:  #083a80"></i>&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fa fa-youtube fa-lg" style="color:  #083a80"></i>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
      </nav>
      </div>
    </div>

  <!--first nav ends-->

  <!--second nav starts-->
  <div class="container-fluid" style="background-color: white !important">
    <div class="container pt-2 pb-2">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: white !important">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('images') }}/logo.jpg" height="70px" width="100px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-family: Abyssinica SIL; font-size: 18px; color: black">
          <b>Categories</b>
        </a>
        <div class="dropdown-menu mt-4" aria-labelledby="navbarDropdown" style="background-color: white!important">

          
          <div class="container">
            <div class="row" >
              <div class="col-md-4">
                <span class="text-uppercase text-white" style="color: black !important">Select Your Product</span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#" style="color: black">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: black">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: black">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#" style="color: black">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: black">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: black">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
    </ul>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <form class="form-inline my-2 my-lg-0" style="margin-left: 400px;">
        <input type="text" placeholder="Search.." id="searchProduct" name="searchProduct">
        {{ csrf_field() }}
      </form>
      <div id="autocomplete" style="display: none; position: absolute; background-color: #343a40; color: #fff; min-height: 200px; min-width: 450px; z-index: 1000; margin-left: 350px; margin-top: 130px;">
        
      </div>
      <ul class="navbar-nav ml-auto">
        <?php
          if(!Session::has('client')){
         ?><li class="nav-item active">
          <a class="nav-link" href="{{ route('clientsLogin') }}" style="font-family: Abyssinica SIL; font-size: 18px; color: black"><b>Login</b> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('clientsRegister') }}" style="font-family: Abyssinica SIL; font-size: 18px; color: black"><b>Reg</b> <span class="sr-only">(current)</span></a>
        </li>
      <?php } else { 
          $client = Session::get('client');
        ?>
          <li class="nav-item active" style="margin-top: 15px;">
          <b>{{ $client[0]->first_name }}</b></a>
        </li>
        <li class="nav-item active" style="margin-top: 15px;">
          <a href="{{ route('clientLogout') }}" style="color: black"><b>Logout</b></a>
        </li>
      <?php } ?>

        <!-- <li class="nav-item active pt-3">
          <button id="cart"><img src="{{asset('images')}}/cart.png" height="30px" width="30px" ></button>
        </li> -->
        <li class="nav-item dropdown" style="margin-top: 15px;">
        <a href="#" style="font-family: Abyssinica SIL; font-size: 18px; color: black; margin-top: 20px;" id="showCart" onclick="showCart();">
          <img src="{{asset('images')}}/cart.png" height="30px" width="30px" >
          @if(Session::has('cart'))
          <span class="badge badge-dark" style="background-color: green; font-family: Arial;">
          {{ $count = count(Session::get('cart'))}}</span>
        </a>
        @if($count != 0)
        <div id="carts" style="display: none; position: absolute; background-color: #343a40; color: #fff; min-height: 200px; min-width: 450px; z-index: 1000; margin-left: -350px; margin-top: 20px;">
          <form>
            {{ csrf_field() }}
            <table class="table table-dark">
              <th scope="col"></th>
              <th scope="col">Product Name</th>
              <th scope="col">Qty</th>
              <th scope="col">Amount</th>
              <tbody id="tbl">
                
              </tbody>
            </table>
            </form>
            <a href="{{ route('checkout')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-right: 10px;">Checkout</a>
        </div>
        @endif
        @endif
      </li>
      </ul>
          
    </div>

  </div>


</nav>
    </div>
  </div>
  <!--second nav ends-->
