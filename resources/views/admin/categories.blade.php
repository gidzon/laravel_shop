@foreach($categories as $category)
    <td>{{$category->title}}</td>
    @isset($category->children)
        @foreach($category->children as $categoryChildren)
            <tr><td>{{$categoryChildren->title}}</td></tr>

            @isset($categoryChildren->children)
                @include('admin.categories', ['categories' => $categoryChildren->children])
            @endisset
        @endforeach
    @endisset
@endforeach
