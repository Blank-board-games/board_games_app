<form id="add-category-form" action="category/add" method="post">
  @csrf <!-- {{ csrf_field() }} -->
  <label for="title">Category name</label>
  <input type="text" name="title" id="title" required><br>
  <button type="submit" class="form-submit-btn">Add</button>
</form>