@include('Includes.header')
<table class="table">
<thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Name</th>
      <th scope="col">Left Eye Power</th>
      <th scope="col">Right Eye Power</th>
      <th scope="col">Qty</th>
      <th scope="col">Total Amount</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sessions as $session)
    <tr>
      <th scope="row">{{ $session['id'] }}</th>
      <td>{{ $session['name']}}</td>
      <td>{{ $session['lp'] }}</td>
      <td>{{ $session['rp'] }}</td>
      <td>{{ $session['qty'] }}</td>
      <td>{{ $session['amt'] }}</td>
      <td><a href="/removeCart/">X</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@include('Includes.footer')
