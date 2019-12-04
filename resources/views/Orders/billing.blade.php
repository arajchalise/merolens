@include('Includes.header')
  <!--Billing-->
    <div style="background-color:  #e2e8f1" class="mt-2">
      <h4 style="text-align: center; color:  #022a67" class="pt-2 pb-2"><b>BILLING DETAILS</b></h4>
    </div>
      <div class="container mt-5 mb-5">
        <form>
          <div class="row">
            <div class="col">
              <label>First Name</label>
              <input type="text" class="form-control" value="{{ $order_Detail[0]->client->name }}">
            </div>
            <div class="col">
              <label>Last Name</label>
              <input type="text" class="form-control">
            </div>
          </div><br>

          <div class="row">
            <div class="form-group col-md-12">
              <label for="inputState">Country</label>
              <select id="inputState" class="form-control">
                <option selected>Nepal</option>
                <option>...</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputCity">Address</label>
              <input type="text" class="form-control" placeholder="House Number, Street Name" value="{{ $order_Detail[0]->shipping_address}}">
            </div>
          </div>

          <div class="row">
            <div class="col">
              <label>Phone</label>
              <input type="text" class="form-control" value="{{ $order_Detail[0]->client->contact_no }}">
            </div>
            <div class="col">
              <label>Email</label>
              <input type="email" class="form-control" value="{{ $order_Detail[0]->client->email }}">
            </div>
          </div><br>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputCity">Town/City</label>
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputCity">State</label>
              <input type="text" class="form-control">
            </div>
          </div>

          <button type="button" class="btn btn-info">Add Billing Address</button>

        </form>
      </div>

   
  <!--billing ends-->

  @include('Includes.footer')
