<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>I'm sad and alone</title>

        <!-- CSS -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/checkout.css')}}" rel="stylesheet">
    </head>
    
    <body>
        <x-navigation></x-navigation>  
        <div class="content">
            <div class="checkout">
                <div class="checkout__messages">
                    @if (Session::has('message'))
                        <div class="message">{{ Session::get('message') }}</div>
                    @elseif (Session::has('error'))
                        <div class="message">{{ Session::get('error') }}</div>
                        <a href="/catalogue">Continue shopping</a>
                    @else
                </div>
                <h1>Checkout</h1>
                <form action="{{action( [App\Http\Controllers\CartController::class, 'checkout'])}}" method="post">
                    @csrf
                    @method('post')
                    <input type="email" name="email" placeholder="Email">
                    <p class="checkout__total">Total price: &euro;{{$total}}</p>
                    <button class="checkout__btn" type="sumbit">Checkout</button>
                </form>
                @endif
            </div>
            
        </div>
        <x-footer></x-footer>
    <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
