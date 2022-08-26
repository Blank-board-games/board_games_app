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
  <div class="content">

    <h1 class="games">Games</h1>
    <div class="filter-container">
      <div class="filters">
        <p>Filter:</p>

        <select name="offer_id" id="parent_id" class="form-control dynamic" data-dependent="details">
          <option value="" disabled="" selected="">Category</option>
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
        <select name="" id="availability">
          <option value="available">Availability</option>
          <option value="instock">In stock</option>
          <option value="comingsoon">Coming soon</option>
        </select>
      </div>
      <div>
        <p>8 products</p>
      </div>
    </div>
    <div class="catalog cards">


      <x-item-card-json> </x-item-card-json>


      <script>
        function FetchThing() {
          fetch("http://127.0.0.1:8000/api/products/desc")
            .then((response) => {
              if (response.ok) {
                return response.json();
              } else {
                throw new Error("error");
              }
            })
            .then(data => {
              console.log(data);

              const select = document.querySelector(".price").value;
              const games = document.querySelector(".games");
              //var value = select.value;
              //const dropDownValue = document.querySelector('.price').value;


              const image = document.querySelector('.image');
              const price = document.querySelector('.item_card__price');
              const discount = document.querySelector(".item_card__discount");


              image.src = data[0].image_path;
              price.textContent = data[0].price;
              title.textContent = data[0].title;

            })
        }

        //FetchThing();

        function handleSelectChange(event) {
          //FetchThing();
          const selectElement = event.target;
          const value = selectElement.value;
          const title = document.querySelector('.item_card__title');

          if (selectElement.value == "high") {
            fetch("http://127.0.0.1:8000/api/products/desc")
              .then((response) => {
                if (response.ok) {
                  return response.json();

                } else {
                  throw new Error("error");
                }
              })
              .then(data => {
                const title = document.querySelector('.item_card__title');
                const price = document.querySelector('.item_card__price');
                //image.src = data[0].image_path;
                price.textContent = data[0].price;
                title.textContent = data[0].title;
                console.log(data);
                //alert(value);

              })
          } else if (selectElement.value == "low") {
            fetch("http://127.0.0.1:8000/api/products/asc")
              .then((response) => {
                if (response.ok) {
                  return response.json();

                } else {
                  throw new Error("error");
                }
              })
              .then(data => {
                for (let i = 0; i < data.length; i++) {
                  const title = document.querySelector('.item_card__title');
                  const price = document.querySelector('.item_card__price');
                  const display = document.querySelector('.catalog');


                  price.textContent = data[i].price;
                  title.textContent = data[i].title;
                  console.log(data);
                }

              })
          }
        }
      </script>
    </div>
    <hr>
    <div class="links">
      <div>
        <h2>Quick links</h2>
        <p>Games</p>
        <p>Kids</p>
        <p>Lookbook</p>
      </div>
      <div>
        <h2>Info</h2>
        <p>About</p>
        <p>Contact us</p>
        <p>Shipping policy</p>
      </div>
    </div>
    <div class="sub-wrap">
      <div>
        <h2 class="subscription">Subscribe to our emails</h2>
        <label>
          <input type="text" placeholder="Email">
        </label>
      </div>
      <div class="icons">
        <img src="{{asset('icons/twit.svg')}}" alt="">
        <img src="{{asset('icons/facebook.svg')}}" alt="">
        <img src="{{asset('icons/pinterest.svg')}}" alt="">
        <img src="{{asset('icons/instagram.svg')}}" alt="">
        <img src="{{asset('icons/tiktok.svg')}}" alt="">
        <img src="{{asset('icons/tumblr.svg')}}" alt="">
        <img src="{{asset('icons/snapchat.svg')}}" alt="">
        <img src="{{asset('icons/youtube.svg')}}" alt="">
        <img src="{{asset('icons/vimeo.svg')}}" alt="">
      </div>
    </div>
    <hr>
    <div class="footer-container">
      <div class="footer-wrap">
        <div class="payment">
          <p>Country/region</p>
          <select name="currency" id="">
            <option>Euro (EUR) </option>
            <option>U.S. Dollar (USD) </option>
            <option>Swiss Franc (CHF) </option>
          </select>
        </div>
        <div class="payment">
          <p>Language</p>
          <select name="language" id="">
            <option>English</option>
            <option>Spanish</option>
            <option>Latvian</option>
          </select>
        </div>
      </div>
      <div>
        <div class="payment-icons">
          <img src="{{asset('icons/shoppay.svg')}}" alt="">
          <img src="{{asset('icons/visa.svg')}}" alt="">
          <img src="{{asset('icons/mastercard.svg')}}" alt="">
          <img src="{{asset('icons/applepay.svg')}}" alt="">
          <img src="{{asset('icons/googlepay.svg')}}" alt="">
          <img src="{{asset('icons/amex.svg')}}" alt="">
        </div>
      </div>
    </div>
  </div>

</body>

</html>