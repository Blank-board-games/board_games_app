<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I'm sad and alone</title>

    <!-- CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">

    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</head>
{{-- <x-navigation></x-navigation> --}}

<div class="content">
    <div class="cart">
        <div class="cart__header">
            <h2>Your cart</h2>
            <a href="/catalogue">Continue shopping</a>
        </div>
        @if (session('cart'))
            <div class="cart__titles">
                <p>PRODUCT</p>
                <p class="cart__titles-large">QUANTITY</p>
                <p>TOTAL</p>
            </div>
            @php
                $subtotal = 0;
                $button_index = 0;
            @endphp

            @foreach (session('cart') as $id => $details)
                @php
                    $subtotal += $details['price'] * $details['quantity'];
                    $button_index++;
                @endphp
                <div class="cart__item" data-id="{{ $id }}">
                    <img src="{{ asset('img/temp-card-img.png') }}" alt="">
                    <div class="cart__info">
                        <h2>{{ $details['title'] }}</h2>
                        <div class="cart__buttons">
                            <div class="cart__counter">
                                <div class="cart__btn-subtract">-</div>
                                <input type="number" min="1" max="{{ $details['count_in_stock'] }}"
                                    class="cart-quantity" value="{{ $details['quantity'] }}" data-id="{{$id}}">
                                <div class="cart__btn-add">+</div>
                            </div>
                            <div class="cart__delete">
                                <form action=" {{ action([App\Http\Controllers\CartController::class, 'remove']) }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="text" name="id" value="{{ $id }}" hidden>
                                    <button type="submit">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.97 2.5H12.5C12.6326 2.5 12.7598 2.55268 12.8536 2.64645C12.9473 2.74021 13 2.86739 13 3C13 3.13261 12.9473 3.25979 12.8536 3.35355C12.7598 3.44732 12.6326 3.5 12.5 3.5H11.25V13.5C11.25 13.6326 11.1973 13.7598 11.1036 13.8536C11.0098 13.9473 10.8826 14 10.75 14H2.25C1.97 14 1.75 13.78 1.75 13.5V3.5H0.5C0.367392 3.5 0.240215 3.44732 0.146447 3.35355C0.0526784 3.25979 0 3.13261 0 3C0 2.86739 0.0526784 2.74021 0.146447 2.64645C0.240215 2.55268 0.367392 2.5 0.5 2.5H4.03C4.06454 1.9032 4.27312 1.32958 4.63 0.85C5.06 0.32 5.7 0 6.5 0C7.3 0 7.94 0.32 8.37 0.85C8.72636 1.32986 8.93489 1.90332 8.97 2.5ZM6.5 1C5.99 1 5.64 1.19 5.41 1.48C5.22 1.72 5.1 2.08 5.05 2.5H7.95C7.89 2.08 7.79 1.72 7.59 1.48C7.35 1.19 7.01 1 6.5 1ZM2.75 3.5V13H10.25V3.5H2.75ZM4.69643 4.89645C4.7902 4.80268 4.91738 4.75 5.04999 4.75C5.1826 4.75 5.30977 4.80268 5.40354 4.89645C5.49731 4.99021 5.54999 5.11739 5.54999 5.25V11.25C5.54999 11.3826 5.49731 11.5098 5.40354 11.6036C5.30977 11.6973 5.1826 11.75 5.04999 11.75C4.91738 11.75 4.7902 11.6973 4.69643 11.6036C4.60267 11.5098 4.54999 11.3826 4.54999 11.25V5.25C4.54999 5.11739 4.60267 4.99021 4.69643 4.89645ZM7.59643 4.89645C7.6902 4.80268 7.81738 4.75 7.94999 4.75C8.0826 4.75 8.20977 4.80268 8.30354 4.89645C8.39731 4.99021 8.44999 5.11739 8.44999 5.25V11.25C8.44999 11.3826 8.39731 11.5098 8.30354 11.6036C8.20977 11.6973 8.0826 11.75 7.94999 11.75C7.81738 11.75 7.6902 11.6973 7.59643 11.6036C7.50267 11.5098 7.44999 11.3826 7.44999 11.25V5.25C7.44999 5.11739 7.50267 4.99021 7.59643 4.89645Z"
                                                fill="black" />
                                        </svg>
                                    </button>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div class="cart__total">&euro;{{ $details['price'] * $details['quantity'] }}</div>
                </div>
            @endforeach
            <div class="cart__checkout">
                <h2>Subtotal <span class="cart__subtotal">&euro;{{ $subtotal }}</span></h2>
                <p>Taxes and shipping calculated at checkout</p>
                <button>Checkout</button>
            </div>
    </div>
@else
    <div class="cart__titles">
        <p>Your cart is empty</p>
    </div>

    @endif
    <div class="similar_prod">
        <h2>You may also like</h2>
        <div class="similar_prod__cards">
            @foreach ($products as $product)
                <x-item-card :product="$product"> </x-item-card>
            @endforeach
        </div>
    </div>
</div>
{{-- <x-footer></x-footer> --}}
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/cart.js') }}"></script>
</body>

</html>
