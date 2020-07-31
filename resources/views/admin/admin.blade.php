@extends('admin.layout.app')

@section('content')
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
@endsection
