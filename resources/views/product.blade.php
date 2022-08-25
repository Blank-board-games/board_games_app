<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I'm sad and alone</title>

    <!-- CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
</head>

<body>
    <x-navigation></x-navigation>
    <div class="content wrapper">
        <div class="product">
            <div class="product__images">
                {{-- TODO: fix image path --}}
                @php
                    $filepath_list = explode(',', $product->image_path);
                @endphp
                <img src="{{asset("storage/".$filepath_list[0])}}" alt="">
            </div>
            <div class="product__information">
                @if (Session::has('message'))
                    <div class="message success">{{ Session::get('message') }}</div>
                @endif
                <h2>{{ $product->title }}</h2>
                @if (isset($product->new_price))
                    <p class="product__old_price">&euro; {{ $product->price }}</p>
                    <p class="product__price">&euro; {{ $product->new_price }}</p>
                @else
                    <p class="product__price">&euro; {{ $product->price }}</p>
                @endif
                @if($product->count_in_stock != 0)

                <form action="{{ action([App\Http\Controllers\CartController::class, 'addToCart']) }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="product__quantity">
                        <p>Quantity</p>
                        <p>Left in stock: {{$product->count_in_stock}}</p>
                        @if($count_in_cart>0)
                            <p>Available: {{$product->count_in_stock - $count_in_cart}}</p>
                        @endif
                        @if($product->count_in_stock - $count_in_cart!= 0)
                            <div class="product__counter">
                                <div class="product__btn-subtract">-</div>
                                <input type="number" name="quantity" min="1" max="{{$product->count_in_stock - $count_in_cart}}" class="product-quantity" value="1">
                                <div class="product__btn-add">+</div>
                            </div>
                        @endif
                    </div>
                    @if($product->count_in_stock - $count_in_cart!= 0)
                        <input type="text" name="id" value="{{$product->id}}" hidden class="product-id">
                        <button class="product__btn product__add" type="submit" name="submit">Add to cart</button>
                        {{-- <button class="product__btn product__buy" type="submit" name="submit-one">Buy it now</button> --}}
                    @endif
                </form>
                @else
                    <div class="message sold">SOLD</div>
                @endif
                @if (isset($product->description))
                    <p class="product__desc">{{ $product->description }}</p>
                @endif
            </div>
        </div>
        <div class="benefits">
            <div class="benefits__card">
                <h3>Free Shipping</h3>
                <p>Unexpected shapes with smart details, functionality, a new luxury feel with a contemporary price point.</p>
            </div>
            <div class="benefits__card">
                <h3>Hassle-Free Exchanges</h3>
                <p>Exchanges are free. Try from the comfort of your home. We will collect from your home, work or an alternative address. </p>
            </div>

        </div>

        <div class="similar_prod">
            <h2>You may also like</h2>
            <div class="similar_prod__cards">
                @foreach($products as $product)
                    <x-item-card :product="$product" > </x-item-card>
                @endforeach

            </div>
        </div>
    </div>
    {{-- <x-footer></x-footer> --}}
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/product.js') }}"></script>
</body>

</html>
