@include('Includes.adminHeader')
  <table class="table">
    <h1 style="text-align: center; margin-bottom: 30px;">Denied Orders</h1>
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Name</th>
      <th scope="col">Left Eye Power</th>
      <th scope="col">Right Eye Power</th>
      <th scope="col">Shipping Address</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Reason</th>
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
      <td>{{ $order->holdOrder->reason }}</td>
      <td><a href="#" class="btn btn-danger">Remove</a>
          <a href="#" class="btn btn-primary">Dispatch</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
 @include('Includes.footer')
