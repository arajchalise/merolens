@include('Includes.adminHeader')
<script type="text/javascript">
  var hold = document.getElementById('hold');
  if(hold.onClick(
      prompt("Are you sure? ");
    ));

</script>
  <table class="table">
    <h1 style="text-align: center; margin-bottom: 30px;">Orders to be dispatched</h1>
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Name</th>
      <th scope="col">Left Eye Power</th>
      <th scope="col">Right Eye Power</th>
      <th scope="col">Shipping Address</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <th scope="row">{{ $order->id }}</th>
      <td>{{ $order->client->name}}</td>
      <td>{{ $order->left_eye_power }}</td>
      <td>{{ $order->right_eye_power }}</td>
      <td>{{ $order->shipping_address }}</td>
      <td>{{ $order->total_amount }}</td>
      <td><a href="/order/{{ $order->id }}/dispatch" class="btn btn-primary">Dispatch</a> <form action="{{ route('hold') }}" style="float: right; margin-right: 20px;">
        <input type="text" name="reason" id="reason" hidden>
        <input type="text" name="id" hidden value="{{ $order->id }}">
        <input type="submit" name="" value="Hold" class="btn btn-danger" onclick="myFunction();">
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
<script>
function myFunction() {
  var reason = prompt('Please Enter the reason for holding orders');
  if(reason != null){
    document.getElementById('reason').value = reason;
  } else {
    alert("Please Enter the reason for holding orders");
  }
}
</script>
@include('Includes.footer')
  
