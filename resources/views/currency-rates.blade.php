<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<div id="app">
    <currency-rates :results="{{$results}}"></currency-rates>
</div>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>