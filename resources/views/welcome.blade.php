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

    <title>Welcome To Mero Lens</title>

   
  </head>
  <body style="margin-top:0px;">

  <!--first nav-->
    <div class="container-fluid" style="background-color: #eaf0f7!important">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:   #eaf0f7!important">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <h6 style="color:  #083a80"><i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;+977-98754346&nbsp;&nbsp;&nbsp;|&nbsp;</h6>
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
      <img src="images/logo.jpg" height="70px" width="100px">
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
        <input type="text" placeholder="Search..">
      </form>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('clientsLogin') }}" style="font-family: Abyssinica SIL; font-size: 18px; color: black"><b>Login</b> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('clientsRegister') }}" style="font-family: Abyssinica SIL; font-size: 18px; color: black"><b>Reg</b> <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active pt-3">
          <img src="{{asset('images')}}/cart.png" height="30px" width="30px">
        </li>
      </ul>
          
    </div>

  </div>


</nav>
    </div>
  </div>

  <!--second nav ends-->

  <!--carousel-->
    
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/slider3.jpg" class="d-block w-100" alt="..." height="700px">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/slider1.jpg" class="d-block w-100" alt="..." height="700px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/slider2.jpg" class="d-block w-100" alt="..." height="700px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
   
  <!--carousel ends-->

  <!--latest glasses-->
    <div class="container" style="margin-top: 100px">
      <h2 style="text-align: center;font-family: Abyssinica SIL;color:  #0b397a"><b>LATEST EYE GLASSES</b></h2><br>
      <p style="text-align: center; font-size: 18px; font-family: Abyssinica SIL;">
        Eye chasmish are very important for thos whos have some difficult<br> in their eye to see every hing clearly and perfectly
      </p>

      <div class="row">

        @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-5 pt-3">
            <div class="card" style="width: 15rem; border-color:  #0b397a">
            <div class="hovereffect">
              <img class="img-responsive" src="{{ asset('images') }}/{{ $product->photo[0]->photo }}" alt="" height="300px" width="250px">

                <div class="overlay">
                  <h2>{{ $product->name }}</h2>
                  <p>
                    <a href="product/{{ $product->id }}" style="color: black;">View Detail</a>
                  </p>
                </div>
            </div>
          </div>  
          </div>
        @endforeach

      </div>

    </div>
  <!--latest glasses ends-->

  <!--image with hover effect-->
    <div class="container-fluid">
      <div class="row mt-5 mb-5">

        <div class="col-lg-4 col-md-8 col-xs-12">
          <div class="hovereffect">
            <img class="img-responsive" src="images/img1.jpg" alt="" height="400px" width="700px">
            <div class="overlay">
              
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-8 col-xs-12">
          <div class="hovereffect">
            <img class="img-responsive" src="images/img2.jpg" alt="" height="400px" width="700px">
            <div class="overlay">
              
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-8 col-xs-12">
          <div class="hovereffect">
            <img class="img-responsive" src="images/img3.jpg" alt="" height="400px" width="700px">
            <div class="overlay">
              
            </div>
          </div>
        </div>

      </div>
    </div>
  <!--image with hover effect ends-->

  <!--new arrival-->
   
    <div class="container" style="margin-top: 100px">
      <h2 style="text-align: center;font-family: Abyssinica SIL;color:  #0b397a"><b>NEW ARRIVAL SUNGLASSES</b></h2><br>
      <p style="text-align: center; font-size: 18px; font-family: Abyssinica SIL;">
        Eye chasmish are very important for thos whos have some difficult<br> in their eye to see every hing clearly and perfectly
      </p><br>

      <div style="text-align: center">
        <button type="button" class="btn btn-primary" style="background-color: white; color: black; border-color: grey; border-radius: 35px"><b>ALL</b></button>

        <button type="button" class="btn btn-primary" style="background-color: #edeff2; color: black; border: none; border-radius: 35px;margin-left: 30px"><b>MEN</b></button>

        <button type="button" class="btn btn-primary" style="background-color: #edeff2; color: black; border: none; border-radius: 35px; margin-left: 30px"><b>WOMEN</b></button>
      </div><br>

      <div class="row">
        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-5 pt-3">
          <div class="card" style="width: 15rem; border-color:  #0b397a">
            <div class="hovereffect">
              <img class="img-responsive" src="{{ asset('images') }}/{{ $product->photo[0]->photo}}" alt="" height="300px" width="250px">

                <div class="overlay">
                  <h2>{{ $product->name }}</h2>
                  <p>
                    <a href="/product/{{ $product->id }}">View Detail</a>
                  </p>
                </div>
            </div>
          </div>  
        </div>
        @endforeach

      </div>

    </div>
  
  <!--new arrival ends-->

  <!--banner image-->
    <div class="container-fluid">

      <div class="row">
      <div class="col-lg-8 col-md-10 col-sm-12" style="background-color: black">

        <div class="row pt-5 pb-5 pl-5">

          <div class="col-lg-4 col-md-8 col-sm-12">
            <h5 style="color: white">IT's very simple and easy</h5>
            <h1 style="color: white"><b>BUY OUR<br> PRODUCTS VERY<br> SIMPLE WAY</b></h1><br>

            <h4 style="color: white">GET PROMO CODE HERE</h4>
          </div>

          <div class="col-lg-4 col-md-8 col-sm-12">
            <h4 style="color: white"><b>1.Search Your Chamish</b></h4>
            <h6 style="color: white">Eye chasmish are very important for thos whos have some difficult </h6><br>

             <h4 style="color: white"><b>3.Quickly Checkout</b></h4>
            <h6 style="color: white">Eye chasmish are very important for thos whos have some difficult </h6>
            
          </div>

          <div class="col-lg-4 col-md-8 col-sm-12">
            <h4 style="color: white"><b>1.Search Your Chamish</b></h4>
            <h6 style="color: white">Eye chasmish are very important for thos whos have some difficult </h6><br>

             <h4 style="color: white"><b>3.Quickly Checkout</b></h4>
            <h6 style="color: white">Eye chasmish are very important for thos whos have some difficult </h6>
          </div>

        </div>

      </div>
      <div class="col-lg-4">
          <img src="images/img5.jpg" width="590px" height="350px">
        </div>
    </div>
    </div><br>
  <!--banner image end-->

  <!--image-->
    <div class="container mt-5 mb-5 mx-auto">
      <h2 style="text-align: center;font-family: Abyssinica SIL;color:  #0b397a"><b>SHOP NOW</b></h2><br>
      <p style="text-align: center; font-size: 18px; font-family: Abyssinica SIL;">
        Eye chasmish are very important for thos whos have some difficult<br> in their eye to see every hing clearly and perfectly
      </p><br>

      <img src="images/img8.jpg" width="1000px" height="450px">
    </div>
  <!--image ends-->

  <!--featured glasses-->
    <div class="container mt-5 mb-5" style="margin-top: 100px">
      <h2 style="text-align: center;font-family: Abyssinica SIL;color:  #0b397a"><b>FEATURED EYE GLASSES</b></h2><br>
      <p style="text-align: center; font-size: 18px; font-family: Abyssinica SIL;">
        Eye chasmish are very important for thos whos have some difficult<br> in their eye to see every hing clearly and perfectly
      </p>

      <div class="row">
        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-5 pt-3">
          <div class="card" style="width: 15rem; border-color:  #0b397a">
            <div class="hovereffect">
              <img class="img-responsive" src="{{ asset('images') }}/{{$product->photo[0]->photo}}" alt="" height="300px" width="250px">

                <div class="overlay">
                  <h2>{{ $product->name }}</h2>
                  <p>
                    <a href="/product/{{ $product->id }}">View Detail</a>
                  </p>
                </div>
            </div>
          </div>  
        </div>
        @endforeach

      </div>

    </div>
  <!--featured glasses end-->

  <!--products-->
    <div style="background-color:  #cad7e9; height: 250px">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-12" style="margin-top: 100px">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <i class="fa fa-fighter-jet fa-3x" style="color: grey"></i>
              </div>
              <div class="col-lg-9">
                <h6><b>Free home delivery</b></h6>
                <p>Eye chasmish are very important for thos whos have some difficult</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12" style="margin-top: 100px">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <i class="fa fa-id-badge fa-3x" style="color: grey"></i>
              </div>
              <div class="col-lg-9">
                <h6><b>Free home delivery</b></h6>
                <p>Eye chasmish are very important for thos whos have some difficult</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12" style="margin-top: 100px">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <i class="fa fa-gift fa-3x" style="color: grey"></i>
              </div>
              <div class="col-lg-9">
                <h6><b>Free home delivery</b></h6>
                <p>Eye chasmish are very important for thos whos have some difficult</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3" style="margin-top: 100px">
            <div class="row">
              <div class="col-lg-3">
                <i class="fa fa-unsorted fa-3x" style="color: grey"></i>
              </div>
              <div class="col-lg-9">
                <h6><b>Free home delivery</b></h6>
                <p>Eye chasmish are very important for thos whos have some difficult</p>
              </div>
            </div>
          </div>
          

        </div>
      </div>
    </div>
  <!--product ends-->


  <!--footer-->
    <div class="container-fluid" style="background-color: #011129">
      <div class="container">
        <div class="row pt-5">
          <div class="col-lg-3 col-md-6 col-sm-12" style="color: white">
            <h5 style="text-align: center;"><b>Los Angeles</b></h5>
            <hr style="background-color: white;"><br>
            <h6 style="font-size: 13px">
              254 Roselen de Square
              Century Street, Haven Tower
              Los Angeles, USA
            </h6><br>

            <h6 style="color: white">
              01254 658 987, 02365 987 456
            </h6><br>

            <h6 style="color: white">
              info@example.com
              www.example.com
            </h6>

          </div>

          <div class="col-lg-3 col-md-6 col-sm-12" style="color: white">
            <h5 style="text-align: center;"><b>Manchester</b></h5>
            <hr style="background-color: white;"><br>
            <h6 style="font-size: 13px">
              254 Roselen de Square
              Century Street, Haven Tower
              Los Angeles, USA
            </h6><br>

            <h6 style="color: white">
              01254 658 987, 02365 987 456
            </h6><br>

            <h6 style="color: white">
              info@example.com
              www.example.com
            </h6>

          </div>

          <div class="col-lg-3 col-md-6 col-sm-12" style="color: white">
            <h5 style="text-align: center;"><b>Abhu Dhabi</b></h5>
            <hr style="background-color: white;"><br>
            <h6 style="font-size: 13px">
              254 Roselen de Square
              Century Street, Haven Tower
              Los Angeles, USA
            </h6><br>

            <h6 style="color: white">
              01254 658 987, 02365 987 456
            </h6><br>

            <h6 style="color: white">
              info@example.com
              www.example.com
            </h6>

          </div>

          <div class="col-lg-3 col-md-6 col-sm-12" style="color: white">
            <h5 style="text-align: center;"><b>News Letter</b></h5>
            <hr style="background-color: white;"><br>
            
            <input type="email" name="email" placeholder="Enter Your Email"><br><br>
            <a href="" style="color: inherit;">Subscribe</a>
          </div>

        </div>
      </div>
    </div>

    <div class="container-fluid" style="background-color: black">
      <div class="row pt-4 pb-4">
        <div class="col-lg-8 col-md-10 col-sm-12">
          <h6 style="color: white; text-align: center; font-size: 13px">Copyright © 2018, All Rights Reserved.</h6>
        </div>

        <div class="col-lg-3 col-md-8 col-sm-12">
          <div class="row">
            <div class="col-lg-4">
              <a href="" style="color: inherit;">
                <h6 style="color: white; text-align: center; font-size: 13px">Product Tracking</h6>
              </a>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-12">
              <a href="" style="color: inherit;">
                <h6 style="color: white; text-align: center; font-size: 13px">Terms And Condition</h6>
              </a>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-12">
              <a href="" style="color: inherit;">
                <h6 style="color: white; text-align: center; font-size: 13px">Contact</h6>
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>
  <!--footer ends-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js')}}/style.js"></script>
    <script type="text/javascript">
      var yourNavigation = $(".nav");
    stickyDiv = "sticky";
    yourHeader = $('.header').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > yourHeader ) {
    yourNavigation.addClass(stickyDiv);
  } else {
    yourNavigation.removeClass(stickyDiv);
  }
});
    </script>
  </body>
</html>
