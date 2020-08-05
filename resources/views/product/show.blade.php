@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="{{asset('storage/'.$product->img)}}" alt="" class="img-fluid">
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

<div class="container">
    <div class="row">
        <div class="col-5"> 
            <div class="form-group">
            <h1>Оставьте отзыв о товаре</h1>

            <form method="post" action="{{route('feedback', $product->id)}}">

                <label>Ваша оценка</label>

                <div class="rating-area">

                    <input type="radio" id="star-5" name="rating" value="5">

                    <label for="star-5" title="Оценка «5»"></label>	

                    <input type="radio" id="star-4" name="rating" value="4">

                    <label for="star-4" title="Оценка «4»"></label>    

                    <input type="radio" id="star-3" name="rating" value="3">

                    <label for="star-3" title="Оценка «3»"></label>  

                    <input type="radio" id="star-2" name="rating" value="2">

                    <label for="star-2" title="Оценка «2»"></label>    

                    <input type="radio" id="star-1" name="rating" value="1">

                    <label for="star-1" title="Оценка «1»"></label>

                </div>
            

                <textarea name="text" class="form-control" placeholder="ваш отзыв"></textarea>
                <input type="submit" value="добавить отзыв" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
