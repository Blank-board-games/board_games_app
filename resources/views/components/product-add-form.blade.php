<form id="add-product-form" action="api/product/add" method="post" enctype="multipart/form-data">
  <label for="title">Title</label><br>
  <input type="text" name="title" id="title"><br>

  <label for="description">Description</label><br>
  <textarea name="description" id="description" cols="30" rows="5"></textarea><br>

  <label for="count">Count</label><br>
  <input type="number" name="count" id="count"><br>

  <label for="price">Price</label><br>
  <input type="text" name="price" id="price"><br>

  <label for="age">Age recommendation: +</label><br>
  <input type="number" name="age" id="age"><br>

  <label for="category">Category</label><br>
  <select name="category" id="category">
    @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->title}}</option>
    @endforeach
  </select><br>
  <label for="images">Images</label><br>
  <input type="file" name="images[]" id="images" multiple><br>
  <button type="submit" class="form-submit-btn">Add</button>
</form>

<img src="{{asset('storage/1/temp-card-img.png')}}" alt="" srcset="">
