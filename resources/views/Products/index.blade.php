<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    @foreach($products as $product)
        <li>{{ $product->name }}</li>
    @endforeach
</body>
</html>
