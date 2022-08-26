<form id="add-product-form" action="product/add" method="post" enctype="multipart/form-data">
  @csrf <!-- {{ csrf_field() }} -->
  <label for="title">Title*</label><br>
  <input type="text" name="title" id="title" required><br>

  <label for="description">Description</label><br>
  <textarea name="description" id="description" cols="30" rows="5"></textarea><br>

  <label for="count">Count*</label><br>
  <input type="number" name="count" id="count" required><br>

  <label for="price">Price*</label><br>
  <div class="price-container">
    <span>€</span>
    <input type="number" step="0.01" name="price" id="price" required><br>
  </div>

  <label for="age">Age recommendation</label><br>
  <div class="age-container">
    <span>+</span>
    <input type="number" name="age" id="age"><br>
  </div>

  <label for="category">Category*</label><br>
  <select name="category" id="category">
    @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->title}}</option>
    @endforeach
  </select><br>
  <label for="images">Images*</label><br>
  <input type="file" name="images[]" id="images" multiple required><br>
  <button type="submit" class="form-submit-btn">Add</button>
</form>

<!-- <img src="{{asset('storage/1/temp-card-img.png')}}" alt="" srcset=""> -->