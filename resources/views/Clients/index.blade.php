<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    @foreach($clients as $client)
        <li>{{ $client->name }}</li>
    @endforeach
</body>
</html>
