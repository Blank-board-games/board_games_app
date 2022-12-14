<header>
  <div class="banner">
    <p>Free shipping available on all orders</p>
  </div>
  <div class="navigation">
    <div class="content">
      <div class="navigation__hamburger">
        <svg class="open-btn" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 1H0V0H18.5V1ZM18.5 9H0V8H18.5V9ZM0 17H18.5V16H0V17Z" fill="black"/>
        </svg>
        <svg class="close-btn" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.06066 8.35355L16.7071 0.707107L16 0L8.35355 7.64645L0.707108 0L0 0.707107L7.64645 8.35355L0 16L0.707107 16.7071L8.35355 9.06066L16 16.7071L16.7071 16L9.06066 8.35355Z" fill="black"/>
        </svg>
      </div>
      <div class="left">
        <div class="navigation__logo">
          <a href="{{URL::to('/')}}">
            <img src="{{asset('img/logo.svg')}}" alt="">
          </a>
        </div>
        <nav class="navigation__menu">
          <ul>
            <li class="menu-item">
              <a href="/catalogue">Catalogue
                <!-- <span class="submenu__arrow">
                  <svg width="10" height="6" viewBox="0 0 10 6">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.639893 1.17711L1.347 0.470001L4.99345 4.11645L8.63989 0.470001L9.347 1.17711L4.99345 5.53066L0.639893 1.17711Z" fill="black"/>
                  </svg>
                </span> -->
              </a>
            <!-- <ul class="submenu">
                <li><a href="/catalogue">Shop all</a></li>
              @foreach($categories as $category)
                <li><a href="#">{{$category->title}}</a></li>
              @endforeach
            </ul> -->
            </li>
            <li class="menu-item"><a href="/contact">Contact</a></li>
            <li class="menu-item"><a href="/about">About</a></li>
          </ul>
        </nav>
      </div>
      <div class="navigation__options">
        <div class="search">
          <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0108 12.7179C10.7372 13.8278 9.07208 14.5 7.25 14.5C3.24594 14.5 0 11.2541 0 7.25C0 3.24594 3.24594 0 7.25 0C11.2541 0 14.5 3.24594 14.5 7.25C14.5 9.07208 13.8278 10.7372 12.7179 12.0108L18.8536 18.1464L18.1464 18.8536L12.0108 12.7179ZM13.5 7.25C13.5 10.7018 10.7018 13.5 7.25 13.5C3.79822 13.5 1 10.7018 1 7.25C1 3.79822 3.79822 1 7.25 1C10.7018 1 13.5 3.79822 13.5 7.25Z" fill="black"/>
          </svg>
        </div>
        <div class="account">
          <a href="{{ route('dashboard') }}">
            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.5 4C5.5 3.20435 5.81607 2.44129 6.37868 1.87868C6.94129 1.31607 7.70435 1 8.5 1C9.29565 1 10.0587 1.31607 10.6213 1.87868C11.1839 2.44129 11.5 3.20435 11.5 4C11.5 4.79565 11.1839 5.55871 10.6213 6.12132C10.0587 6.68393 9.29565 7 8.5 7C7.70435 7 6.94129 6.68393 6.37868 6.12132C5.81607 5.55871 5.5 4.79565 5.5 4ZM8.5 0C7.43913 0 6.42172 0.421427 5.67157 1.17157C4.92143 1.92172 4.5 2.93913 4.5 4C4.5 5.06087 4.92143 6.07828 5.67157 6.82843C6.42172 7.57857 7.43913 8 8.5 8C9.56087 8 10.5783 7.57857 11.3284 6.82843C12.0786 6.07828 12.5 5.06087 12.5 4C12.5 2.93913 12.0786 1.92172 11.3284 1.17157C10.5783 0.421427 9.56087 0 8.5 0ZM14.08 12.15C15.2 12.97 15.91 14.39 15.99 17H1.01C1.09 14.4 1.8 12.97 2.91 12.15C4.16 11.25 6 11 8.5 11C11 11 12.85 11.26 14.08 12.15ZM8.5 10C6 10 3.85 10.24 2.33 11.35C0.77 12.48 0 14.43 0 17.5V18H17V17.5C17 14.43 16.23 12.48 14.67 11.35C13.15 10.25 11 10 8.5 10Z" fill="black"/>
            </svg>
          </a>
        </div>
        @auth
        <div>
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a class="logout-btn" :href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">
              <svg width="16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 384.971 384.971" style="enable-background:new 0 0 384.971 384.971;" xml:space="preserve">
                <g id="Sign_Out">
                  <path d="M180.455,360.91H24.061V24.061h156.394c6.641,0,12.03-5.39,12.03-12.03s-5.39-12.03-12.03-12.03H12.03    C5.39,0.001,0,5.39,0,12.031V372.94c0,6.641,5.39,12.03,12.03,12.03h168.424c6.641,0,12.03-5.39,12.03-12.03    C192.485,366.299,187.095,360.91,180.455,360.91z"/>
                  <path d="M381.481,184.088l-83.009-84.2c-4.704-4.752-12.319-4.74-17.011,0c-4.704,4.74-4.704,12.439,0,17.179l62.558,63.46H96.279    c-6.641,0-12.03,5.438-12.03,12.151c0,6.713,5.39,12.151,12.03,12.151h247.74l-62.558,63.46c-4.704,4.752-4.704,12.439,0,17.179    c4.704,4.752,12.319,4.752,17.011,0l82.997-84.2C386.113,196.588,386.161,188.756,381.481,184.088z"/>
                </g>
              </svg>
            </a>
        </form>
        </div>
        @endauth
        <div class="cart">
          <a href="/cart">
            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.94157 0H0.781574L0.0115738 11.6C-0.0350324 12.2838 0.0594434 12.9699 0.289133 13.6156C0.518823 14.2614 0.878821 14.853 1.34677 15.3538C1.81472 15.8546 2.38063 16.2538 3.00936 16.5266C3.63808 16.7995 4.31619 16.9402 5.00157 16.94H12.3816C13.0661 16.9401 13.7433 16.7997 14.3713 16.5274C14.9993 16.2552 15.5647 15.8569 16.0325 15.3572C16.5003 14.8575 16.8605 14.2671 17.0909 13.6226C17.3212 12.978 17.4167 12.293 17.3716 11.61L16.5916 0H10.2666H3.94157ZM1.72157 1H3.94157V1.63C3.94157 2.25378 4.06444 2.87145 4.30315 3.44775C4.54186 4.02404 4.89174 4.54768 5.33282 4.98876C5.7739 5.42984 6.29753 5.77972 6.87383 6.01843C7.45012 6.25714 8.06779 6.38 8.69157 6.38C9.31535 6.38 9.93302 6.25714 10.5093 6.01843C11.0856 5.77972 11.6093 5.42984 12.0503 4.98876C12.4914 4.54768 12.8413 4.02404 13.08 3.44775C13.3187 2.87145 13.4416 2.25378 13.4416 1.63V1H15.6616L16.3816 11.67C16.4186 12.2175 16.3426 12.7669 16.1582 13.2838C15.9739 13.8007 15.6851 14.2741 15.3099 14.6746C14.9347 15.0752 14.4811 15.3942 13.9773 15.6119C13.4736 15.8296 12.9304 15.9413 12.3816 15.94H5.00157C4.45361 15.9399 3.91152 15.8272 3.40893 15.6089C2.90633 15.3906 2.45394 15.0713 2.07982 14.671C1.70571 14.2706 1.41784 13.7976 1.23408 13.2814C1.05032 12.7652 0.974587 12.2167 1.01157 11.67L1.72157 1ZM4.94157 1H12.4416V1.63C12.4416 2.62456 12.0465 3.57839 11.3432 4.28165C10.64 4.98491 9.68614 5.38 8.69157 5.38C7.69701 5.38 6.74318 4.98491 6.03992 4.28165C5.33666 3.57839 4.94157 2.62456 4.94157 1.63V1Z" fill="black"/>
            </svg>
            <span class="cart-item-count">{{$count}}</span>
          </a>
        </div>
      </div>
      <div class="navigation__search">
        <form action="{{ action([App\Http\Controllers\CatalogueController::class, 'showSearch'])}}" method='get'>
          <div class="navigation__search_container" onclick="event.stopPropagation()">
            <input type="text" name="search" id="search" placeholder="Search">
              <button class="search-icon" type="submit">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0108 12.7179C10.7372 13.8278 9.07208 14.5 7.25 14.5C3.24594 14.5 0 11.2541 0 7.25C0 3.24594 3.24594 0 7.25 0C11.2541 0 14.5 3.24594 14.5 7.25C14.5 9.07208 13.8278 10.7372 12.7179 12.0108L18.8536 18.1464L18.1464 18.8536L12.0108 12.7179ZM13.5 7.25C13.5 10.7018 10.7018 13.5 7.25 13.5C3.79822 13.5 1 10.7018 1 7.25C1 3.79822 3.79822 1 7.25 1C10.7018 1 13.5 3.79822 13.5 7.25Z"/>
                </svg>
              </button>
          </div>
        </form>
        <div class="return-icon">
          <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.56066 8.35355L17.2071 0.707107L16.5 0L8.85355 7.64645L1.20711 0L0.5 0.707107L8.14645 8.35355L0.5 16L1.20711 16.7071L8.85355 9.06066L16.5 16.7071L17.2071 16L9.56066 8.35355Z" fill="black"/>
          </svg>
        </div>
      </div>
    </div>
  </div>
</header>
