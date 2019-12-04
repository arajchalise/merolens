@include('Includes.header')
  <!--login-->
    <div class="container mt-5" style="background-color:  #e7edf5">
      <h4 style="color:  #042f70; text-align: center;" class="pt-2 pb-2"><b>Clients Registration</b></h4>
    </div>

    <div class="container mt-5 mb-5">
      <form>

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control"  placeholder="Full Name"> 
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> 
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1">Confirm Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
        </div>

        <button type="submit" class="btn btn-info">Submit</button>
      </form>
    </div>
  <!--login end-->
@include('Includes.footer')
