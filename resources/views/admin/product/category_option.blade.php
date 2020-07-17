 @foreach ($categories as $category)
  <option value="{{$category->id}}" class="form-control">{{$category->title}}</option>
    @foreach ($category->children as $categoryChildren)
      <option value="{{$categoryChildren->id}}" class="form-control">{{$categoryChildren->title}}</option>
      @include('admin.product.category_option')
    @endforeach
@endforeach