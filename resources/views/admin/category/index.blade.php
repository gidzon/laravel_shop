@extends('layout.app')

@section('header')
    @parent
@endsection

@section('dashboard')
    <form action="{{route('admin.product.store')}}">
        <div class="form-group">
            <input type="text" name="nameCatgory" id="" class="form-control">
            <select name="childCategory" id="" class="form-control">
                @foreach ($catogories as $category)
                    @if ($category->parentId === 0 || isset($category))
                        <option value="0">нет родительской категории</option>
                    @else
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endif
                @endforeach
            </select>
            
            <input type="submit" name="" id="" class="form-control">
        </div>
    </form>
@endsection