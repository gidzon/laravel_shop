@foreach($categories as $category)
    <td>{{$category->title}}</td>
    <td><a href="{{route('category.edit', $category->id)}}">Обновить</a></td>
    <td><a href="{{route('category.destroy', $category->id)}}">Удалить</a></td>
    @isset($category->children)
        @foreach($category->children as $categoryChildren)
            <tr>
                <td>{{$categoryChildren->title}}</td>
                <td><a href="{{route('category.edit', $categoryChildren->id)}}">Обновить</a></td>
                <td><a href="{{route('category.destroy', $categoryChildren->id)}}">Удалить</a></td>
            </tr>
            @isset($categoryChildren->children)
                @include('admin.categories', ['categories' => $categoryChildren->children])
            @endisset
        @endforeach
    @endisset
@endforeach
