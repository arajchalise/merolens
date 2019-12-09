
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
            
            <input type="email" name="email" placeholder="Enter Your Email" style="width: 100%; height: 35px; border: none; padding: 15px;"><br><br>
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
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js')}}/style.js"></script>
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
    <script type="text/javascript">
      var yourNavigation = jQuery(".nav");
    stickyDiv = "sticky";
    yourHeader = jQuery('.header').height();

jQuery(window).scroll(function() {
  if( jQuery(this).scrollTop() > yourHeader ) {
    yourNavigation.addClass(stickyDiv);
  } else {
    yourNavigation.removeClass(stickyDiv);
  }
});

    function showCart() {
      var i = 0;
      var dt = "";
      jQuery.get('/showCart', function (data) {
        jQuery('#carts').toggle('fast');
        while(data[i] != null) {
          var link = '<td><a href="#" onclick=removeFromCart('+i+')><span class="badge" style="background-color: red; color: #fff;">X</span></a</td>'
          var img = "<td><img src={{ asset('images') }}/"+data[i]['photo']+" style='width: 40px; height: 40px;'></td>"
            dt += "<tr>"+img+"<td>"+data[i]['name']+"</td><td><input type=number name=qty id=qty"+i+" value="+data[i]['qty']+" onchange=updateQty("+i+") min=1 style=width:50px;></td><td>"+data[i]['amt']+"</td>"+link+"</tr>";
            console.log(link);
            i++;
        }
        jQuery('#tbl').html(dt);
      })
    }

    jQuery(document).ready(function() {
        jQuery('#searchProduct').keyup(function(){
            var q = jQuery(this).val();
            if(q != ''){
              var _token = jQuery('input[name = "_token"]').val();

              jQuery.ajax({
                url: "{{ route('autocomplete') }}",
                method: "POST",
                data: {q:q, _token:_token},
                success: function(data) {
                  jQuery('#autocomplete').fadeIn();
                 jQuery('#autocomplete').html(data);
                }
              })
            } else {
              jQuery('#autocomplete').fadeOut();
            }
        });

        jQuery('#confirmPassword').keyup(function() {
          var confirmPassword = jQuery(this).val();
          var password = jQuery('#password').val();

          if(password != confirmPassword){
            jQuery('#confirmPassword').css('color', 'red');
          } else{
            jQuery('#confirmPassword').css('color', 'green');
          }
        });
    });


    function getShippingAddr() {
      if(jQuery('#gridCheck').prop('checked')){
        jQuery('#shippingAddr').css('display', 'block');
      } else {
        jQuery('#shippingAddr').css('display', 'none');
      }
    }

    function getPaymentMethod() {
      if(jQuery('#customRadio1').prop('checked')){
        jQuery('#paypal').css('display', 'block');
        jQuery('#cards').css('display', 'none');
      } else {
        jQuery('#cards').css('display', 'block');
        jQuery('#paypal').css('display', 'none');
      }
    }

    function removePic(id) {
      jQuery.get('/removePic/'+id, function(data) {
        if(data != null){
          location.reload(true);
        }
      });
    }

    function deleteProduct(id) {
      if(confirm("You want to delete this?? ")){
          jQuery.get('product/'+id+'/destroy');
          location.reload(true);
      } else {
        location.reload(true);
      } 
    }

    function removeFromCart(id) {
      if(confirm("Remove Item??")){
        jQuery.get('/removeCart/'+id);
        location.reload(true);
      }
    }

    function updateQty(id) {
      var qty = jQuery('#qty'+id).val();
      var _token = jQuery('input[name = "_token"]').val();
      jQuery.ajax({
                url: "{{ route('updateCart') }}",
                method: "POST",
                data: {qty:qty, id:id, _token:_token},
                success: function(data) {
                  location.reload(true);
                }
              })
    }

    function processCheckout() {

    }
    </script>
  </body>
</html>

