@include('Includes.header')
  <!--login-->
    <div class="container mt-5" style="background-color:  #e7edf5">
      <h4 style="color:  #042f70; text-align: center;" class="pt-2 pb-2"><b>Clients Registration</b></h4>
    </div>

    <div class="container mt-5 mb-5">
      <form>

         {{ csrf_field() }}
        <div class="form-row">
          <div class="col">
            <label for="first_name">First Name*</label>
            <input type="text" class="form-control" placeholder="First Name" id="first_name" required name="first_name">
          </div>
          <div class="col">
            <label for="last_name">Last Name*</label>
            <input type="text" class="form-control" placeholder="Last Name" id="last_name" required name="last_name">
          </div>
        </div>

        <div class="form-group">
          <label for="address">Address*</label>
          <input type="text" class="form-control" id="address" placeholder="Address"required >
        </div>

        <div class="form-row">
          <div class="col">
              <label for="email">Email address*</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email" name="email" required> 
          </div>
          <div class="col">
              <label for="contactNo">Contact No*</label>
              <input type="text" class="form-control" id="contactNo" aria-describedby="emailHelp" placeholder="Enter Contact Number" name="contact_no" required> 
          </div>
        </div>

        <div class="form-group">
          <label for="password">Password*</label>
          <input type="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        
        <div class="form-group">
          <label for="confirmPassword">Confirm Password*</label>
          <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
        </div>

        <button type="submit" class="btn btn-info">Register</button>
      </form>
    </div>
  <!--login end-->
@include('Includes.footer')
