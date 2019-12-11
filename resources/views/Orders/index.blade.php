@include('Includes.adminHeader')
@if(Auth::user()->role_id != 3)
  <table class="table">
    <h1 style="text-align: center; margin-bottom: 30px;">Orders to be dispatched</h1>
    <div style="margin-left: 100px;"><form action="{{ route('searchOrder') }}" method="POST">
      {{ csrf_field() }}
  <input type="text" name="q" placeholder="Search Order..." >
  <input type="submit" name="searchOrder" value="Search Order" class="btn btn-success">
</form></div>
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Clients' Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Qty</th>
      <th scope="col">Left Eye Power</th>
      <th scope="col">Right Eye Power</th>
      <th scope="col">Receiver's Name</th>
      <th scope="col">Shipping Address</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tr>
       <?php
if (isset($_POST['searchOrder'])) { 
  $total_qty =0;
  $total_amt = 0;
  ?>
  <tbody>
    @foreach($orders as $order)
      <th scope="row">{{ $order->id }}</th>
      <td>{{ $order->first_name }} {{ $order->last_name }}</td>
      <td>{{ $order->name}}</td>
      <td>{{ $order->qty }}</td>
      <td>{{ $order->left_eye_power }}</td>
      <td>{{ $order->right_eye_power }}</td>
      <td>{{ $order->receipent_name }}</td>
      <td>{{ $order->shipping_address }}</td>
      <td>{{ $order->total_amount }}</td>
      <td><a href="/order/{{ $order->id }}/dispatch" class="btn btn-primary">Dispatch</a> 
        <form action="{{ route('hold') }}" style="float: right; margin-right: 20px;" id="hold">
        <input type="text" name="reason" id="reason" hidden>
        <input type="text" name="id" hidden value="{{ $order->id }}">
        <input type="submit" name="" value="Hold" class="btn btn-danger" onclick="event.preventDefault(); myFunction();">
      </form></td>
    </tr>
    <?php 
    $total_qty += $order->qty;
    $total_amt += $order->total_amount;
      ?>
    @endforeach
    <tr><td colspan="3"><b>Total</b></td><td><b>{{ $total_qty }}</b></td><td colspan="4"></td><td><b>{{ $total_amt }}</b></td></tr>
  </tbody>
<?php } else {
 ?>
  <tbody>
    @foreach($orders as $order)
      <th scope="row">{{ $order->id }}</th>
      <td>{{ $order->client->first_name }} {{ $order->client->last_name }}</td>
      <td>{{ $order->product->name}}</td>
      <td>{{ $order->qty }}</td>
      <td>{{ $order->left_eye_power }}</td>
      <td>{{ $order->right_eye_power }}</td>
      <td>{{ $order->receipent_name }}</td>
      <td>{{ $order->shipping_address }}</td>
      <td>{{ $order->total_amount }}</td>
      <td><a href="/order/{{ $order->id }}/dispatch" class="btn btn-primary">Dispatch</a> 
        <form action="{{ route('hold') }}" style="float: right; margin-right: 20px;" id="hold">
        <input type="text" name="reason" id="reason" hidden>
        <input type="text" name="id" hidden value="{{ $order->id }}">
        <input type="submit" name="" value="Hold" class="btn btn-danger" onclick="event.preventDefault(); myFunction();">
      </form></td>
    </tr>
    @endforeach
    <tr><td colspan="3"></td><td>{{ $orders->links('pagination::bootstrap-4') }}</td></tr>
  </tbody>
 <?php } ?>
</table>

<script>
function myFunction() {
  var reason = prompt('Please Enter the reason for holding orders');
  if(reason != null){
    document.getElementById('reason').value = reason;
    document.getElementById('hold').submit();
  } else {
    location.reload(true);
  }
}
</script>
 @else
    <div style="min-height: 300px; text-align: center;"><p style="color: red; font-weight: bold;">You are not authorized</p></div>
  @endif
@include('Includes.footer')

