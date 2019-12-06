@include('Includes.adminHeader')
  <!--login-->
    <div class="container mt-5" style="background-color:  #e7edf5">
      <h4 style="color:  #042f70; text-align: center;" class="pt-2 pb-2"><b>Add Product</b></h4>
    </div>

    <div class="container mt-5 mb-5">
      <form method="POST" action="{{ route('storeProduct') }}" enctype='multipart/form-data'>
          {{ csrf_field() }}
        <div class="form-row">
          <div class="col">
            <label for="product_name">Product Name*</label>
            <input type="text" class="form-control" placeholder="Product Name" id="product_name" required name="product_name">
          </div>
          <div class="col">
            <label for="brand_name">Brand Name*</label>
            <input type="text" class="form-control" placeholder="Brand Name" id="brand_name" required name="brand_name">
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="product_category">Product Category*</label>
            <input type="text" class="form-control" placeholder="Product Category" id="product_category" required name="product_category">
          </div>
          <div class="col">
            <label for="product_price">Product Price*</label>
            <input type="text" class="form-control" placeholder="Product Price" id="product_price" required name="product_price">
          </div>
        </div>
        <div class="form-group">
          <label for="stock">Stock*</label>
          <input type="text" class="form-control" id="stock" aria-describedby="stock" placeholder="Enter stock">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea3">Product Description*</label>
          <textarea class="form-control" id="exampleFormControlTextarea3" rows="7" required name="product_description"></textarea>
        </div>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01"
            aria-describedby="inputGroupFileAddon01" required name="photo">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
    </div>
  <!--login end-->
@include('Includes.footer')
