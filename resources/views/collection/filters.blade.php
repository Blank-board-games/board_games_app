<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/filters.css')}}" rel="stylesheet">
  <title>Document</title>
</head>

<body>

  <section>
    <div class="filter-header">
      <h1>Filter and sort</h1>
      <p>6 of 6 products</p>
      <a href="#" class="close"></a>
    </div>
  </section>
  <section>
    <div class="filter-base">
      <div class="sort-option">
        <p>Availability</p>
        <img src="{{asset('icons/arrowright.svg')}}" alt="">
      </div>
      <div class="sort-option">
        <p>Price</p>
        <img src="{{asset('icons/arrowright.svg')}}" alt="">
      </div>
      <div class="sort-option">
        <p>Age</p>
        <img src="{{asset('icons/arrowright.svg')}}" alt="">
      </div>
    </div>
  </section>
  <section>
    <div class="sort-availability">
      <div class="availability">
        <img src="{{asset('icons/arrowleft.svg')}}" alt="">
        <p>Availability</p>
      </div>
      <div class="stock-option">
        <input name="cssCheckbox" id="demo_opt_1" type="checkbox" class="css-checkbox">
        <label for="demo_opt_1">In stock (6)</label>
      </div>
      <div class="stock-option">
        <input name="cssCheckbox" id="demo_opt_2" type="checkbox" class="css-checkbox">
        <label for="demo_opt_2">Out of stock (1)</label>
      </div>
    </div>
  </section>
  <section>
    <div class="price-sorting">
      <div class="price">
        <img src="{{asset('icons/arrowleft.svg')}}" alt="">
        <p class="price-text">Price</p>
      </div>
      <p class="high-price">The highest price is $615.00</p>
      <div class="from-to-wrapper">
        <div class="from-to">
          <p>$</p>
          <input type="text" placeholder="From">
        </div>
        <div class="from-to">
          <p>$</p>
          <input type="text" placeholder="To">
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="age-sort">
      <div class="age">
        <img src="{{asset('icons/arrowleft.svg')}}" alt="">
        <p>Age</p>
      </div>
      <div class="age-option">
        <input name="cssCheckbox" id="demo_opt_1" type="checkbox" class="css-checkbox">
        <label for="demo_opt_1">Over 18 (6)</label>
      </div>
      <div class="age-option">
        <input name="cssCheckbox" id="demo_opt_2" type="checkbox" class="css-checkbox">
        <label for="demo_opt_2">Below 18 (1)</label>
      </div>

      <div class="age-option">
        <input name="cssCheckbox" id="demo_opt_3" type="checkbox" class="css-checkbox">
        <label for="demo_opt_3">Kids (1)</label>
      </div>

    </div>
  </section>
  <section>
    <div class="clear-all-action">
      <p>Clear all</p>
      <button>Apply</button>
    </div>
  </section>
</body>

</html>