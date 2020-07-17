@foreach($categories as $category)
    @if($category->parent_id == 0)
        <li><a href="{{route('product.index', $category->id)}}">{{$category->title}}</a></li>
    @endif


@endforeach
