@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="" alt="" class="img-fluid">
                <p class="text-justify">
                   {{$product->desc}}
                </p>
                <p class="text-center">{{$product->price.'  рублей'}}</p>
                <form action="{{route('cart.store', $product->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="number" name="amount" id="" class="form-control" placeholder="product count">
                        <input type="submit" name="submit" class="form-control" value="купить">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h4>Товаров в корзине</h4>
                <p>{{$cart}}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col">
            <a href="{{route('cart.index')}}">корзина</a>
            </div>
        </div>
    </div>
@endsection
