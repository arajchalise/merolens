@include('Includes.header')
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
      @if(!empty($products))
      <div class="row">

        @for($i = 0; $i < 4; $i++)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-5 pt-3">
            <div class="card" style="width: 15rem; border-color:  #0b397a">
            <div class="hovereffect">
              <img class="img-responsive" src="{{ asset('images') }}/{{ $products[$i]->photo[0]->photo }}" alt="" height="300px" width="250px">

                <div class="overlay">
                  <h2>{{ $products[$i]->name }}</h2>
                  <p>
                    <a href="product/{{ $products[$i]->id }}" style="color: black;">View Detail</a>
                  </p>
                </div>
            </div>
          </div>  
          </div>
        @endfor

      </div>
      @endif
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
    <div class="container-fluid" style="min-height: 350px;">

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
          <img src="images/img5.jpg" width="100%" height="100%">
        </div>
    </div>
    </div>
  <!--banner image end-->
<div class="clearfix"></div>
  <!--image-->
    <div class="container mt-5 mb-5 mx-auto">
      <h2 style="text-align: center;font-family: Abyssinica SIL;color:  #0b397a; clear: both;"><b>SHOP NOW</b></h2><br>
      <p style="text-align: center; font-size: 18px; font-family: Abyssinica SIL;">
        Eye chasmish are very important for thos whos have some difficult<br> in their eye to see every hing clearly and perfectly
      </p><br>

      <img src="images/img8.jpg" width="100%" height="100%">
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
    <div style="background-color:  #cad7e9; min-height: 250px">
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
@include('Includes.footer')
