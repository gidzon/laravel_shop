@foreach ($categories as $category)

    <option value="{{$category->id}}" class="form-control">{{$category->title}}</option>
        @if(isset($category->children))
      @foreach ($category->children as $categoryChildren)

        <option value="{{$categoryChildren->id}}" class="form-control">{{$categoryChildren->title}}</option>
        @if(isset($categoryChildren->children))
        @include('admin.category.category_option', ['categories' => $categoryChildren->children])
        @endif
     @endforeach
        @endif
@endforeach

