<form action="{{route('product.store')}}" method="POST" name="product" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
          <input type="text" name="name" id="" class="form-control" placeholder="name product">
          <input type="number" name="price" class="form-control">
          <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>

          <select name="category" id="" class="form-control">
           @include('admin.product.category_option')
          </select>

          <label for="uploadPhoto" class="">Upload Photo</label>
          <input type="file" class="form-control-file" id="uploadPhoto" name="img">
          <input type="submit" name="submit" class="form-control">
        </div>
    </form>
