<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/collection.css')}}" rel="stylesheet">
  <title>Document</title>
</head>

<body>

  <div class="content">
    <h1>Games</h1>

    <div class="filter-wrapper">
      <div class="top-filter">
        <a class="filterlink" href="catalogue/filters"><img src="{{asset('icons/filter.svg')}}" alt="">
          <span>Filter and sort</span>
        </a>
      </div>
      <div class="product-count">
        <p>8 products</p>
      </div>
    </div>
    <div class="cards">
      <x-item-card imageSrc="{{asset('img/temp-card-img.png')}}" title="item title" price="1000.00" oldPrice="800.00"> </x-item-card>
      <x-item-card imageSrc="{{asset('img/temp-card-img.png')}}" title="item title" price="1000.00" oldPrice="800.00"> </x-item-card>
      <x-item-card imageSrc="{{asset('img/temp-card-img.png')}}" title="item title" price="1000.00" oldPrice="800.00"> </x-item-card>
      <x-item-card imageSrc="{{asset('img/temp-card-img.png')}}" title="item title" price="1000.00" oldPrice="800.00"> </x-item-card>
      <x-item-card imageSrc="{{asset('img/temp-card-img.png')}}" title="item title" price="1000.00" oldPrice="800.00"> </x-item-card>
      <x-item-card imageSrc="{{asset('img/temp-card-img.png')}}" title="item title" price="1000.00" oldPrice="800.00"> </x-item-card>
      <x-item-card imageSrc="{{asset('img/temp-card-img.png')}}" title="item title" price="1000.00" oldPrice="800.00"> </x-item-card>
      <x-item-card imageSrc="{{asset('img/temp-card-img.png')}}" title="item title" price="1000.00" oldPrice="800.00"> </x-item-card>
    </div>
    <div class="line one"></div>
    <div class="links">

      <div>
        <h1>Quick links</h1>
        <div class="wrap">
          <p>Games</p>
          <p>Option</p>
          <p>Option</p>
        </div>
      </div>
      <div>
        <h1>Info</h1>
        <div class="wrap">
          <p>About</p>
          <p>Contact us</p>
          <p>Shipping policy</p>
          <p>Blog</p>
        </div>
      </div>
      <div>
        <h1>Our mission</h1>
        <div class="wrap">
          <p>Our Mission is simple: To make games as popular as the movies!</p>

        </div>
      </div>
      <div class="sub-wrap">
        <h1 class="subscription">Subscribe to our emails</h1>
        <label>
          <input type="text" placeholder="Email">
        </label>
        <div class="icon-wrap">
          <img src="{{asset('icons/twit.svg')}}" alt="">
          <img src="{{asset('icons/facebook.svg')}}" alt="">
          <img src="{{asset('icons/instagram.svg')}}" alt="">
          <img src="{{asset('icons/tiktok.svg')}}" alt="">
          <img src="{{asset('icons/youtube.svg')}}" alt="">
        </div>
      </div>

    </div>
    <div class="line two"></div>
    <footer>
      <div class="footer-wrap">
        <div class="payment">
          <p>Country/region</p>
          <select name="currency" id="">
            <option>Canada (CAD $)</option>
            <option>Euro (EUR) </option>
          </select>
        </div>
        <div class="payment">
          <p>Language</p>
          <select name="language" id="">
            <option>English</option>
            <option>Spain</option>
          </select>
        </div>
      </div>
      <img class="payment" src="{{asset('icons/pay.svg')}}" alt="">
      <p class="below">© 2021, dawn-theme-default Powered by Shopify</p>
    </footer>
  </div>
</body>

</html>