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
    <div class="container">
        <div class="row float-right">
            <div class="col-3">
                <h3>Categories</h3>
                <table class="table">
                    <tr>
                        <th scope="col">Название</th>
                    </tr>
                    <tr>
                        @include('admin.categories')
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row float-right">
            <div class="col-3">
                <h3>Product</h3>
                <table class="table">
                    <tr>
                        <th scope="col">Название</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Описание</th>
                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->desc}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>
