@extends('admin.layout.app')

@section('content')
    <a href="{{route('category.create')}}">добавить категорию</a>
    <a href="{{route('product.create')}}">добавить товар</a>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h3>Categories</h3>
                <table class="table">
                    <tr>
                        <th scope="col">Название</th>
                        <th scope="col">Действие</th>
                    </tr>
                    <tr>
                        @include('admin.categories')
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-3">
                <h3>Product</h3>
                <table class="table">
                    <tr>
                        <th scope="col">Название</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Действие</th>
                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->desc}}</td>
                            <td><a href="{{route('product.edit', $product)}}">Обновить</a></td>
                            <td><a href="{{route('product.destroy', $product)}}">Удалить</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
