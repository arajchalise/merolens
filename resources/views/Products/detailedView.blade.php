@include('Includes.header')
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
 @include('Includes.footer')
