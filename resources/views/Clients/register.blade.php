@include('Includes.header')
  <!--login-->
    <div class="container mt-5" style="background-color:  #e7edf5">
      <h4 style="color:  #042f70; text-align: center;" class="pt-2 pb-2"><b>Clients Registration</b></h4>
    </div>

    <div class="container mt-5 mb-5">
      <form action="{{ route('clientStore') }}" method="POST">
    {{ csrf_field() }}
       <div class="form-row">
      <div class="form-group col-md-6">
      <label for="firstName">First Name</label>
      <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName">
    </div>
    <div class="form-group col-md-6">
      <label for="lastName">Last Name</label>
      <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName">
    </div>
  </div>
    <div class="form-row">
      <div class="form-group col-md-6">
      <label for="email">Email </label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="contactNo">Contact No.</label>
      <input type="text" class="form-control" id="contactNo" placeholder="Contact Number" name="contactNo">
    </div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Address" name="address">
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
      <input type="text" class="form-control" id="city" placeholder="City" name="city" >
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="state">State </label>
      <input type="text" class="form-control" id="state" placeholder="State" name="state">
    </div>
    <div class="form-group col-md-6">
      <label for="postalCode">ZIP/Postal Code</label>
      <input type="text" class="form-control" id="postalCode" placeholder="ZIP/Postal Code" name="postalCode">
    </div>
  </div>
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
        <button type="submit" class="btn btn-info">Register</button>
      </form>
    </div>
  <!--login end-->
@include('Includes.footer')
