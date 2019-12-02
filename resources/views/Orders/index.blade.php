<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    @foreach($orders as $order)
        <li>{{ $order -> shipping_address }}, {{ $order -> total_amount }}</li>
    @endforeach
</body>
</html>
