@include('Includes.adminHeader')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
  <!--login-->
    <div class="container mt-5" style="background-color:  #e7edf5">
      <h4 style="color:  #042f70; text-align: center;" class="pt-2 pb-2"><b>Add Product</b></h4>
    </div>

    <div class="container mt-5 mb-5">
      <form method="POST" action="{{ route('updateProduct') }}" enctype='multipart/form-data'novalidate>
          {{ csrf_field() }}
          <input type="text" name="id" value="{{ $product[0]->id }}" hidden>
        <div class="form-row">
          <div class="col">
            <label for="product_name">Product Name*</label>
            <input type="text" class="form-control" placeholder="Product Name" id="product_name" required name="product_name" value="{{ $product[0]->name }}">
          </div>
          <div class="col">
            <label for="brand_name">Brand Name*</label>
            <input type="text" class="form-control" placeholder="Brand Name" id="brand_name" required name="brand_name" value="{{ $product[0]->brand_name }}">
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="product_category">Product Category*</label>
            <input type="text" class="form-control" placeholder="Product Category" id="product_category" required name="product_category" value="{{ $product[0]->type }}">
          </div>
          <div class="col">
            <label for="product_price">Product Price*</label>
            <input type="text" class="form-control" placeholder="Product Price" id="product_price" required name="product_price" value="{{ $product[0]->price }}">
          </div>
        </div>
        <div class="form-group">
          <label for="stock">Stock*</label>
          <input type="text" class="form-control" id="stock" aria-describedby="stock" placeholder="Enter stock" value="{{ $product[0]->stock }}" name="stock">
        </div>
          <textarea rows="15" required name="product_description">
            {{ $product[0]->description }}
          </textarea>
        
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <!-- <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01"
            aria-describedby="inputGroupFileAddon01" required name="photo[]">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div> -->
          <input type="file" name="photo[]" multiple>
        </div>
        <br><br>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
      @foreach($product[0]->photo as $photo)
        <div>
          <img src="{{ asset('images') }}/{{ $photo->photo }}">
          <button id="removePic" style="position: absolute;" onclick="removePic({{ $photo->id }});"><span class="badge">X</span></button>
        </div>
      @endforeach
    </div>
  <!--login end-->
@include('Includes.footer')
