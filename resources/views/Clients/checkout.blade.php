@include('Includes.header')
<?php
if(Session::has('client')){
  $client = Session::get('client');
  $firstName = $client[0]->first_name;
  $lastName = $client[0]->last_name;
  $address = $client[0]->address;
  $email = $client[0]->email;
  $contactNo = $client[0]->contact_no;
  $city = $client[0]->city;
  $state = $client[0]->state;
  $postalCode = $client[0]->postal_code;
} else {
  $firstName = "";
  $lastName = "";
  $address = "";
  $email = "";
  $contactNo = "";
  $city = "";
  $state = "";
  $postalCode = "";

}

 ?>
<div class="row" style="width: 95%; margin-right: auto; margin-left: auto; margin-bottom: 20px;">
  <div class="col-lg-6 col-md-6" style="box-shadow: 2px 4px 3px #3CAEA3">
  <form action="{{ route('makeOrder') }}" method="POST">
    {{ csrf_field() }}
    <p ><b>Billing Address</b></p>
       <div class="form-row">
      <div class="form-group col-md-6">
      <label for="firstName">First Name</label>
      <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" value="{{ $firstName }}">
    </div>
    <div class="form-group col-md-6">
      <label for="lastName">Last Name</label>
      <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" value="{{ $lastName }}">
    </div>
  </div>
    <div class="form-row">
      <div class="form-group col-md-6">
      <label for="email">Email </label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $email }}">
    </div>
    <div class="form-group col-md-6">
      <label for="contactNo">Contact No.</label>
      <input type="text" class="form-control" id="contactNo" placeholder="Contact Number" name="contactNo" value="{{ $contactNo }}">
    </div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="{{ $address }}">
  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="country">Country </label>
      <select class="custom-select" name="country" id="country">
        <option selected value="0">Select Country</option>
        <option value="Nepal">Nepal</option>
        <option value="India">India</option>
        <option value="Pakistan">Pakistan</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" placeholder="City" name="city" value="{{ $city }}">
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="state">State </label>
      <input type="text" class="form-control" id="state" placeholder="State" name="state" value="{{ $state }}">
    </div>
    <div class="form-group col-md-6">
      <label for="postalCode">ZIP/Postal Code</label>
      <input type="text" class="form-control" id="postalCode" placeholder="ZIP/Postal Code" name="postalCode" value="{{ $postalCode }}">
    </div>
  </div>
  @if(!Session::has('client'))
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="password">Password </label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
    <div class="form-group col-md-6">
      <label for="confirmPassword">Confirm Password</label>
      <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
    </div>
  </div>
  @endif
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" onclick="getShippingAddr();" value="Y" name="ship">
      <label class="form-check-label" for="gridCheck">
        Ship to another address
      </label>
    </div>
  </div>
  <div id="shippingAddr" style="display: none;">
    <p><b>Shipping Address</b></p>
      <div class="form-row">
      <div class="form-group col-md-6">
      <label for="sFirstName">First Name</label>
      <input type="text" class="form-control" id="sFirstName" placeholder="First Name" name="sFirstName">
    </div>
    <div class="form-group col-md-6">
      <label for="sLastName">Last Name</label>
      <input type="text" class="form-control" id="sLastName" placeholder="Last Name" name="sLastName">
    </div>
  </div>
    <div class="form-row">
      <div class="form-group col-md-6">
      <label for="sEmail">Email </label>
      <input type="email" class="form-control" id="sEmail" placeholder="Email" name="sEmail">
    </div>
    <div class="form-group col-md-6">
      <label for="sContactNo">Contact No.</label>
      <input type="text" class="form-control" id="sContactNo" placeholder="Contact Number" name="sContactNo">
    </div>
  </div>
  <div class="form-group">
    <label for="sAddress">Address</label>
    <input type="text" class="form-control" id="sAddress" placeholder="Address" name="sAddress">
  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="sCountry">Country </label>
        <select class="custom-select" name="sCountry">
        <option selected value="0">Select Country</option>
        <option value="Nepal">Nepal</option>
        <option value="India">India</option>
        <option value="Pakistan">Pakistan</option>
      </select>
      </div>
    <div class="form-group col-md-6">
      <label for="sCity">City</label>
      <input type="text" class="form-control" id="sCity" placeholder="City" name="sCity">
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="sState">State </label>
      <input type="text" class="form-control" id="sState" placeholder="State" name="sState">
    </div>
    <div class="form-group col-md-6">
      <label for="sPostalCode">ZIP/Postal Code</label>
      <input type="text" class="form-control" id="sPostalCode" placeholder="ZIP/Postal Code">
    </div>
  </div>
  </div>
</div>
<div class="col-lg-6 col-md-6" style="min-height: 100px;">
  <div class="row" style="margin-bottom: 20px;">
    <div class="col-lg-6 col-md-6" style="box-shadow: 2px 4px 3px #3CAEA3">
      <p><b>Choose Shipping Method</b></p>
        <div class="form-group">
        <select class="custom-select" name="shippingMethods">
        <option selected value="-1">Select Shipping Method </option>
        <option value="0">Normal(Free but May takes 1 week)</option>
        <option value="10">Express(Cost you $10 but may takes 4 days)</option>
        <option value="20">Platinum(Cost you $20 but takes maximum of 2 days)</option>
      </select>
    </div>
    </div>
    <div class="col-md-6 col-lg-6" style="box-shadow: 2px 4px 3px #3CAEA3">
      <p><b>Choose Payment Method</b></p>
        
            <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="paymentMethod" class="custom-control-input"  value="Paypal" onclick="getPaymentMethod();">
            <label class="custom-control-label" for="customRadio1">
            <img src="{{ asset('images') }}/paypal.png" style="width: 50px; height: 20px;">
            Paypal</label>
          </div>
            <div id="paypal" style="display: none;"><p><b>We will redirect you to Paypal later</b></p></div>
          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="paymentMethod" class="custom-control-input" value="Card" onclick="getPaymentMethod();">
            <label class="custom-control-label" for="customRadio2">
              <img src="{{ asset('images') }}/card.jpg" style="width: 50px; height: 20px;">
            Debit/Credit Cards</label>
          </div>
          <div id="cards" style="display: none;">
           <div class="form-group">
            <label for="cardNumber">Card Number</label>
            <input type="text" class="form-control" id="cardNumber" placeholder="Card Number" name="cardNumber">
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
          <label for="expireDate">Expiry Date</label>
          <input type="text" class="form-control" id="expireDate" placeholder="MM/YY" name="expireDate">
        </div>
        <div class="form-group col-md-6">
          <label for="cvvNo">CVV Number</label>
          <input type="text" class="form-control" id="cvvNo" placeholder="CVV Number" name="cvvNo">
        </div>
        </div>
      </div>
      
    </div>
  </div>
    <table class="table" style="box-shadow: 2px 4px 3px #3CAEA3">
      <p><b>Products to Checkout</b></p>
    <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Left Eye Power</th>
      <th scope="col">Right Eye Power</th>
      <th scope="col">Qty</th>
      <th scope="col"> Amount</th>
    </tr>
    </thead>
    <tbody>
    <?php $amt = 0; $i=0; ?>
    @while(!empty($sessions[$i]))
    <?php 
    $amt += $sessions[$i]['amt']; ?>
    <tr>
      <td><img src="{{ asset('images') }}/{{ $sessions[$i]['photo'] }}" style="width: 40px; height: 40px;"></td>
      <td>{{ $sessions[$i]['name']}}</td>
      <td>{{ $sessions[$i]['lp'] }}</td>
      <td>{{ $sessions[$i]['rp'] }}</td>
      <td><input type="number" name ="qty" id="qty{{ $i }}" value="{{ $sessions[$i]['qty'] }}"  onchange="updateQty({{ $i }})" min="1" style="width: 50px;"></td>
      <td>Rs. {{ $sessions[$i]['amt'] }}</td>
      <td><a href="#" onclick="removeFromCart({{ $i }})"><span class="badge" style="background-color: red; color: #fff;">X</span></a></td>
    </tr>
    <?php $i++; ?>
    @endwhile
    <th scope="row"><td colspan="4"><b>Total Amount</b></td><td colspan="2"><b>Rs. <?php echo $amt; ?></b></td></th>
  </tbody>
</table>
@if(count(Session::get('cart')) != 0)
<input type="submit" id="" class="btn btn-success btn-lg" style="border-radius: 0px; float: right;" value="Place Order Now">
@endif
</div>
</form>
</div>
@include('Includes.footer')
