<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/filtersfull.css')}}" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="content">
    <section>
      <div class="price-sort">
        <div class="top-wrap">
          <p>The highest price is $500</p>
          <a href="#">Reset</a>
        </div>
        <hr>
        <div class="below-wrap">
          <input type="text" placeholder="From">
          <input type="text" placeholder="To">
        </div>
      </div>
    </section>
    <section>
      <div class="age-sort">
        <a href="#">Reset</a>
        <hr>
        <div class="age-option">
          <input name="cssCheckbox" id="demo_opt_1" type="checkbox" class="css-checkbox">
          <label for="demo_opt_1">Adults (7)</label>
        </div>
        <div class="age-option">
          <input name="cssCheckbox" id="demo_opt_2" type="checkbox" class="css-checkbox">
          <label for="demo_opt_2">Kids (1)</label>
        </div>
      </div>
    </section>
  </div>
</body>

</html>