@include('Includes.header')
<table class="table">
<thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Name</th>
      <th scope="col">Left Eye Power</th>
      <th scope="col">Right Eye Power</th>
      <th scope="col">Qty</th>
      <th scope="col"> Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php $amt = 0; $i=0; ?>
    @while(!empty($sessions[$i]))
    <?php 
    $amt += $sessions[$i]['amt']; ?>
    <tr>
      <th scope="row">{{ $sessions[$i]['id'] }}</th>
      <td>{{ $sessions[$i]['name']}}</td>
      <td>{{ $sessions[$i]['lp'] }}</td>
      <td>{{ $sessions[$i]['rp'] }}</td>
      <td>{{ $sessions[$i]['qty'] }}</td>
      <td>Rs. {{ $sessions[$i]['amt'] }}</td>
      <td><a href="/removeCart/{{ $i }}"><span class="badge" style="background-color: red; color: #fff;">X</span></a></td>
    </tr>
    <?php $i++; ?>
    @endwhile
    <th scope="row"><td colspan="4"><b>Total Amount</b></td><td colspan="2"><b>Rs. <?php echo $amt; ?></b></td></th>
  </tbody>
</table>
<a href="{{ route('billing')}}">Proceed</a>
@include('Includes.footer')
