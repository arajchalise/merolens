 @include('Includes.adminHeader')
  <!--latest glasses-->
    <div class="container" style="margin-top: 100px">
      <a class="btn btn-primary btn-lg" href="{{ route('createProduct') }}" style="float: right">Add Products</a>
      <h2 style="text-align: center;font-family: Abyssinica SIL;color:  #0b397a"><b>AVAILABLE PRODUCTS</b></h2><br>
      
      <div class="row">

        @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-5 pt-3">
            <div class="card" style="width: 15rem; border-color:  #0b397a">
            <div class="hovereffect">
              <img class="img-responsive" src="{{ asset('images') }}/{{ $product->photo[0]->photo }}" alt="" height="300px" width="250px">

                <div class="overlay">
                  <h2>{{ $product->name }}</h2>
                  <p>
                    <a href="product/{{ $product->id }}/edit" style="color: black;">Edit Product</a><br><br>
                    <a href="#" style="color: black;" onclick="deleteProduct({{ $product->id }});">Delete Product</a>
                  </p>
                </div>
            </div>
          </div>  
          </div>
        @endforeach

      </div>

    </div>
  <!--latest glasses ends-->
@include('Includes.footer')
