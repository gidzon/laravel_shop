<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <a href="{{route('category.create')}}">добавить категорию</a>
    <a href="{{route('product.create')}}">добавить товар</a>
</body>
</html>