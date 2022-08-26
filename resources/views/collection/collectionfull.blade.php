<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/collectionfull.css')}}" rel="stylesheet">
  <title>Collection</title>
</head>

<body>
  <x-navigation></x-navigation>
  <div class="content">
    <h1 class="games">Games</h1>
    <div class="filter-container">
      <div class="filters">
        <p>Filter:</p>

        <select name="offer_id" id="parent_id" class="form-control dynamic" data-dependent="details" onchange="handleSelectChange(event)">
          <option value="default" disabled="" selected="">Category</option>
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->title}}</option>
          @endforeach
        </select>

        @foreach($categories as $category)
        <div class="some" id="some_{{ $category->id }}" style="display:none;">
          {{ $category->details }}
        </div>
        @endforeach



        <select name="options" class="price" onchange="handleSelectChange(event)">
          <option value="default" selected="selected">Price</option>
          <option value="high">High</option>
          <option value="low">Low</option>
        </select>

        </form>
        <select name="" id="availability" onchange="handleSelectChange(event)">
          <option value="available">Availability</option>
          <option value="instock">In stock</option>
          <option value="comingsoon">Coming soon</option>
        </select>
      </div>
      <div>
        <p id="count">8 products</p>
      </div>
    </div>
    <div class="catalog cards">

      <x-item-card-json> </x-item-card-json>

    </div>

  </div>
  <x-footer></x-footer>

  <script src="{{ asset('js/script.js')}}"></script>
  <script src="{{ asset('js/collectionfull.js')}}"></script>

</body>

</html>