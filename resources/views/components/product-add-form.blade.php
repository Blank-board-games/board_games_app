<form action="api/product/add" method="post" enctype="multipart/form-data">
  <label for="title">Title</label>
  <input type="text" name="title" id="title"><br>

  <label for="description">Description</label>
  <textarea name="description" id="description" cols="30" rows="5"></textarea><br>

  <label for="count">Count</label>
  <input type="number" name="count" id="count"><br>

  <label for="price">Price</label>
  <input type="text" name="price" id="price"><br>

  <label for="age">Age recommendation: +</label>  
  <input type="number" name="age" id="age"><br>

  <label for="category">Category</label>
  <select name="category" id="category">
    <option value="asasas">asasas</option>
  </select><br>

  <label for="images">Images</label>
  <input type="file" name="images[]" id="images" multiple><br>
  <button type="submit" class="form-submit-btn">Submit</button>
</form>