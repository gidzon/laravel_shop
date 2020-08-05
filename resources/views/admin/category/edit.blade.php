@extends('admin.layout.app')

@section('form')
<div class="container">
  <div class="row mt-5">
    <div class="col-5 mx-auto">
      <form action="{{route('category.update', $categoryId)}}" method="post">
        @csrf
            <div class="form-group">
              <input type="text" name="title"  class="form-control" placeholder="cateogory">
                @if ($errors->has('title'))
                @foreach ($errors->get('title') as $message)
                  <div class="alert alert-danger" role="alert">
                    <li>{{$message}}</li>
                  </div>
                  @endforeach
                @endif
              <select name="parent_id" id="" class="form-control">
                  <option value="0">Нет категорий</option>
                @include('admin.category.category_option')
              </select>
              <input type="submit" name="submit" class="form-control">
            </div>
      </form>
    </div>
  </div>
</div>
@endsection
