<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Home</title>
</head>

<body>
    <h1>Welcome to Laravel Home Page</h1>
    <p>This is a simple Laravel application.</p>

    <p>{{$informazioni}}</p>

    <nav>
        <ul>
            <li><a href="{{route("home")}}">Homepage</a></li>
            <li><a href="{{route("carrello")}}">Carrello</a></li>
            <li><a href="{{route("profilo")}}">Profilo</a></li>
        </ul>
    </nav>
</body>

</html>