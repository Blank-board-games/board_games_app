<footer>
  <div class="footer__upper">
    <div class="links content">
      <div class="links__group">
        <h2>Quick links</h2>
        <a href="#">Games</a>
        <a href="#">Kids</a>
        <a href="#">Lookbook</a>
      </div>
      <div class="links__group">
        <h2>Info</h2>
        <a href="#">About</a>
        <a href="#">Contact us</a>
        <a href="#">Shipping policy</a>
      </div>
    </div>
    <div class="sub-wrap content">
      <div>
        <form action="/subscription/add" method="POST">
          @csrf <!-- {{ csrf_field() }} -->
          <label for="subscribe">Subscribe to our emails</label><br>
          <input id="subscribe" name="subscribe" type="text" placeholder="Email" required>
          <button type="submit">&#x2192;</button>
        </form>
        @if (Session::has('message_subscription_add'))
          <div class="session-message">{{ Session::get('message_subscription_add') }}</div>
        @endif
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
  </div>
  <div class="footer-container content">
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
</footer>