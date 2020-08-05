@extends('admin.layout.app')

@section('form')
 <div class="container">
   <div class="row mt-5">
     <div class="col-5 mx-auto">
        <form action="{{route('product.update', $product)}}" method="POST" name="product" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                  <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="name product">
                  @if ($errors->has('name'))
                    @foreach ($errors->get('name') as $message)
                      <div class="alert alert-danger" role="alert">
                        <li>{{$message}}</li>
                      </div>
                    @endforeach
                  @endif
                  <input type="number" name="price" value="{{old('price')}}" class="form-control" placeholder="цена">
                  @if ($errors->has('price'))
                    @foreach ($errors->get('price') as $message)
                      <div class="alert alert-danger" role="alert">
                        <li>{{$message}}</li>
                      </div>
                    @endforeach
                  @endif
                  <textarea name="desc" value="{{old('desc')}}" cols="30" rows="10" class="form-control" placeholder="desc"></textarea>
                  @if ($errors->has('desc'))
                    @foreach ($errors->get('desc') as $message)
                      <div class="alert alert-danger" role="alert">
                        <li>{{$message}}</li>
                      </div>
                    @endforeach
                  @endif

                  <select name="category_id" id="" class="form-control">
                  @include('admin.product.category_option')
                  </select>

                  <label for="uploadPhoto" class="">Upload Photo</label>
                  
                  <input type="file" class="form-control-file" id="uploadPhoto" name="img">
                  
                  <input type="submit" name="submit" class="form-control">
                </div>
        </form>
    </div>
  </div>
</div>
@endsection
