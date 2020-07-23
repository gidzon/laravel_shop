<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <table class="table">
        <tr>
            <th>Название</th>
            <th>Цена</th>
            <th>Сумма товара</th>
            <th>Количество</th>
        </tr>
        @foreach($carts as $cart)
        <tr>
            <td scope="col">{{$cart->name_product}}</td>
            <td scope="col">{{$cart->price}}</td>
            <td scope="col">{{$cart->product_summ}}</td>
            <td scope="col">{{$cart->amount}}</td>
        </tr>
        @endforeach
    </table>
   
        <div class="row float-right">
            <div class="col">
                <table class="table">
                    <tr>
                        <th>Итого</th>
                    </tr>
                    <tr>
                        <td scope="col">50000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row float-right">
            <div class="col">
                <a href="">Оформить заказ</a>
            </div>
        </div>
</body>
</html>