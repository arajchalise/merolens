<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/style.css">

    <title>Welcome To Mero Lens</title>

  </head>
  <body>
  <!--first nav-->
    <div class="container-fluid" style="background-color: #eaf0f7!important">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:   #eaf0f7!important">

          <a class="navbar-brand" href="/"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

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
          <img src="{{ asset('images') }}/cart.png" height="30px" width="30px">
        </li>
      </ul>
          
    </div>

  </div>


</nav>
    </div>
  </div>

  <!--second nav ends-->

<!--main-->

  <div class="container mb-5 mt-5">
    <div class="card">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">
            
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="{{ asset('images')}}/{{ $product[0]->photo[0]->photo}}" /></div>
            </div>
            
          </div>
          <div class="details col-md-6">
            <h3 class="product-title">{{$product[0]->name}}</h3>
            <div class="rating">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <span class="review-no">41 reviews</span>
            </div>
            <p class="product-description">{{ $product[0]->description }}</p>
            <h4 class="price">Current price: <span>Rs. {{ $product[0]->price }}/-</span></h4>
            <p class="vote"></p>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Select Eye</option>
                      <option>Left</option>
                      <option>Right</option>
                    </select>
                  </div>
              </div>
            </div>

            <h5 class="sizes">Sizes:
              <span class="size" data-toggle="tooltip" title="small">s</span>
              <span class="size" data-toggle="tooltip" title="medium">m</span>
              <span class="size" data-toggle="tooltip" title="large">l</span>
              <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
            </h5>
            <h5 class="colors">Color: Black
              
            </h5>

            <div class="action">
              <a href="{{ $product[0]->id }}/addToCart" class="add-to-cart btn btn-default" type="button">Add to cart</a>
              <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--main ends-->

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
    <script type="text/javascript" src="{{ asset('js') }}/style.js"></script>
  </body>
</html>
