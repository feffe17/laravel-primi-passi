<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    <header>
        <a class="titolo" href="{{ route('home') }}">Home</a>
        <ul>
            <li>
                <a href="{{ route('about') }}">About us</a>
                <a href="{{ route('shop') }}">Shop</a>
            </li>
        </ul>
    </header>
</body>
</html>