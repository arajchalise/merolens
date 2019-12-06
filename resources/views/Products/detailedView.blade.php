@include('Includes.header')
<!--main-->

  <div class="container mb-5 mt-5">
    <div class="card">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-lg-6 col-md-6">
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="{{ asset('images')}}/{{ $product[0]->photo[0]->photo}}" style="width: 100%;" /></div>
            </div>
            
          </div>
          <div class="details col-md-6">
            <h3 class="product-title">{{$product[0]->name}}</h3>
            <div class="rating">
              <div class="stars">
                <span class="fa fa-star " ></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
              </div>
              <span class="review-no">41 reviews</span>
            </div>
            <p class="product-description" style="width: 90%; margin-right: auto;">{{ $product[0]->description }}</p>
            <h4 class="price">Current Price: <span>Rs. {{ $product[0]->price }}/-</span></h4>
            <p class="vote"></p>

            <h5 class="sizes">Sizes:
              <span class="size" data-toggle="tooltip" title="small">s</span>
              <span class="size" data-toggle="tooltip" title="medium">m</span>
              <span class="size" data-toggle="tooltip" title="large">l</span>
              <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
            </h5>
            <h5 class="colors">Color: Black
              
            </h5>

            <div class="action">
             <form action="{{ route('addToCart') }}" method="POST">
              {{ csrf_field() }}
              <input type="text" name="id" value="{{ $product[0]->id }}" hidden id="id">
              <input type="text" name="price" value="{{ $product[0]->price }}" hidden>
              <input type="text" name="name" value="{{ $product[0]->name }}" hidden>
              <div class="form-group row">
              <label for="leftEye" class="col-sm-3 col-form-label">Left Eye Power</label>
              <div class="col-sm-3">
                <input type="number" name="leftEye" class="form-control" id="leftEye" placeholder="Enter Left Eye Power" step="0.01" min="-6" max="6" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="leftEye" class="col-sm-3 col-form-label">Right Eye Power</label>
              <div class="col-sm-3">
                <input type="number" name="rightEye" class="form-control" id="leftEye" placeholder="Enter Left Eye Power" step="0.01" min="-6" max="6" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="qty" class="col-sm-3 col-form-label">Qty</label>
              <div class="col-sm-3">
                <input type="number" name="qty" class="form-control" id="qty" placeholder="Qty" min="1" value="1" required onchange="myFunct();">
              </div>
              <div><p id="stock" style="color: red; font-weight: bold;"></p></div>
            </div>
            <input type="submit" name="" value="Add to Cart" class="btn btn-success" id="addToCart">
            </form>
            
          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h3>Ratings and Reviews of {{ $product[0]->name }}</h3>
    <div class="reviews" style="min-height: 200px;">
        <h5>By: Clients Name </h5>
        <p>Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other.</p>
    </div>
  </div>
  <script>
    jQuery.noConflict(); // prevent conflicts with prototype
  </script>

  <script type="text/javascript">
    function myFunct() {
      var id = document.getElementById('id').value;
      var qty = parseInt(document.getElementById('qty').value);
      jQuery.get('/getStock/'+id, function(data) {
         var c = parseInt(data);
         document.getElementById('qty').max = data;
          var remaining = data-qty;
          if(remaining <= 0){
            jQuery('#stock').html('Out of Stock');
          } else{
            jQuery('#stock').html(remaining+" Items left");
          }
          
      });
    }
  </script>

<!--main ends-->
 @include('Includes.footer')
