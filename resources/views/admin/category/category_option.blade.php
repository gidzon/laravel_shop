@if(isset($categories))
    <option value="0">Нет категорий</option>
    
@else
@foreach ($categories as $category)

	
    <option value="{{$category->id}}" class="form-control">{{$category->title}}</option>
    	@if(!empty($category->children))
      @foreach ($category->children as $categoryChildren)
      	
        <option value="{{$categoryChildren->id}}" class="form-control">{{$categoryChildren->title}}</option>
        @include('admin.category.category_option', ['categories' => $categoryChildren->children])
     @endforeach 
     @endif
@endforeach
@endif