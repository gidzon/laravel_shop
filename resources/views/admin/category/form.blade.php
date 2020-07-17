<form action="{{route('category.store')}}" method="post">
	@csrf
      <div class="form-group">
        <input type="text" name="nameCategory" id="" class="form-control" placeholder="cateogory">
        
        <select name="childCategory" id="" class="form-control">

          @include('admin.category.category_option')
          
        </select>
        <input type="submit" name="submit" class="form-control">
      </div>
    </form>