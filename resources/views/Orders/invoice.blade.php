@include('Includes.header')
<div class="container mt-5 mb-5" id="invoice">
      <table class="table">
        <!-- Sellers Detail -->
        <tr><td colspan="5">Shop Name<br>Shop Address<br>City<br>Country<br>Email<br>Phone<br>Reg No<br><br>Invoice No<br>Payment Method: {{ $orders[0][0]->payment_method }}<br>Status<br><br>Date</td>
            <!-- Buyers Details -->
        <td colspan="5"><b>Billing:</b><br>{{ $orders[0][0]->client->first_name }} {{ $orders[0][0]->client->last_name }}<br>{{ $orders[0][0]->client->address }}, {{ $orders[0][0]->client->city }}, {{ $orders[0][0]->client->state }}, {{ $orders[0][0]->client->country }}<br>{{ $orders[0][0]->client->email }}<br>{{ $orders[0][0]->client->contact_no }}<br><br>
            <b>Shipping:</b><br>{{ $orders[0][0]->receipent_name }}<br>{{ $orders[0][0]->shipping_address }}<br>{{ $orders[0][0]->receipemt_email }}<br>{{ $orders[0][0]->receipent_contact }}<br><br>{{ $orders[0][0]->shipping_method }}</td></tr>
            <tr style="background-color:  #031458 ">
            <th scope="col" style="color: white">SN.</th>
            <th scope="col" style="color: white">Product Name/Options</th>
            <th scope="col" style="color: white">Qty</th>
            <th scope="col" style="color: white">Price Exc. of Taxes</th>
            <th scope="col" style="color: white">Sub Total</th>
            <th scope="col" style="color: white">Discount</th>
            <th scope="col" style="color: white"> Tax %</th>
            <th scope="col" style="color: white">Tax</th>
            <th scope="col" style="color: white">Manufacturer</th>
            <th scope="col" style="color: white">Image</th>
          </tr>
          <tr>
        <tbody>
            <?php $i = 1;
                $total_amt = 0;
                $total_qty = 0;
             ?>
          @foreach($orders as $oder)
          @foreach($oder as $order)
        <tr><td>{{ $i }}</td><td>{{ $order->product->name }}<br>Power: Left {{ $order->left_eye_power }} Right {{ $order->right_eye_power }}</td><td>{{ $order->qty }}</td><td>{{ $order->total_amount }}</td><td>4500</td><td>0</td><td>0</td><td>0</td><td>{{ $order->product->brand_name }}</td><td><img src="{{ asset('images') }}/{{ $order->product->photo[0]->photo }}" style="width: 80px; height: 80px;"></td></tr>
        <?php $i++;
            $total_qty += $order->qty;
            $total_amt += $order->total_amount;
         ?>
          @endforeach
          @endforeach
          <tr><td colspan="9">Total Qty</td><td colspan="1">{{ $total_qty }}</td></tr>
          <tr><td colspan="9">Sub Total</td><td colspan="1">{{ $total_amt }}</td></tr>
          <tr><td colspan="9">Shipping</td><td colspan="1">{{ $orders[0][0]->shipping_method }}</td></tr>
          <tr><td colspan="9">Discount</td><td colspan="1"></td></tr>
          <tr><td colspan="9">Tax</td><td colspan="1"></td></tr>
          <tr style="font-weight: bold;"><td colspan="9">Grand Total</td><td colspan="1"><?php echo $total_amt+ $orders[0][0]->shipping_method ?></td></tr>
        </tbody>
      </table>
    </div>
    <a href="#" onclick="PrintDiv();">Print</a>

    <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('invoice');
       var popupWin = window.open('', '_blank');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
@include('Includes.footer')
