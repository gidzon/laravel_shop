@extends('layout.app')

  @section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                @if(!empty($product))
                <div class="col-4">
                    <div class="card my-2" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('storage/'.$product->img)}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$product->name}}</h5>
                          <p class="card-text">{{$product->desc}}</p>
                            <p class="card-text">{{$product->price}}</p>
                          <a href="{{route('product.show', $product->id)}}" class="btn btn-primary">Подробнее</a>
                        </div>
                      </div>
                </div>
                @endif
                    @empty($product)
                        <p>Нет товаров</p>
                    @endempty
            @endforeach
        </div>
    </div>
@endsection
