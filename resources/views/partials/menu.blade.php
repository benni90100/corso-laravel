<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> {{'documento' . (2+2) }}</h1>
    <ul>
        <li><a href="{{ url('/')}}">inizio</a></li>
        <li><a href="{{ url('/home')}}">home</a></li>
        <li><a href="{{ url('/data')}}">data</a></li>
        <li><a href="{{ url('/about')}}">about</a></li>
    </ul>
</body>
</html>