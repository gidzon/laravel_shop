@foreach($categories as $category)

        <li><a href="{{route('product.index', $category->id)}}">{{$category->title}}</a></li>
    @isset($category->children)
        @foreach($category->children as $categoryChildren)
            <ul>
                <li><a href="{{route('product.index', $categoryChildren->id)}}">{{$categoryChildren->title}}</a></li>
                @isset($categoryChildren->children)
                    @include('layout.menu', ['categories' => $categoryChildren->children])
                @endisset
            </ul>
        @endforeach
    @endisset

@endforeach
