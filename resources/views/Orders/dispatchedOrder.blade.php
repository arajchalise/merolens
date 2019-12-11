@include('Includes.adminHeader')
  @if(Auth::user()->role_id != 3)
  <table class="table">
    <h1 style="text-align: center; margin-bottom: 30px;">Dispatched Orders</h1>
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Clients' Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Qty</th>
      <th scope="col">Left Eye Power</th>
      <th scope="col">Right Eye Power</th>
      <th scope="col">Receivers' Name</th>
      <th scope="col">Shipping Address</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <th scope="row">{{ $order->id }}</th>
      <td>{{ $order->client->first_name }} {{ $order->client->last_name }}</td>
      <td>{{ $order->product->name}}</td>
      <td>{{ $order->qty }}</td>
      <td>{{ $order->left_eye_power }}</td>
      <td>{{ $order->right_eye_power }}</td>
      <td>{{ $order->receipent_name }}</td>
      <td>{{ $order->shipping_address }}</td>
      <td>{{ $order->total_amount }}</td>
      <td>@if(Auth::user()->role_id == 1) <a href="#" class="btn btn-danger">Remove</a>@endif</td>
    </tr>
    @endforeach
    <tr><td colspan="3"></td><td>{{ $orders->links('pagination::bootstrap-4') }}</td></tr>
  </tbody>
</table>
 @else
    <div style="min-height: 300px; text-align: center;"><p style="color: red; font-weight: bold;">You are not authorized</p></div>
  @endif
 @include('Includes.footer')
