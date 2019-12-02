<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    @foreach($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</body>
</html>
