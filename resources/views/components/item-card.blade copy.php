<div class="item_card">
    <a href="/catalogue/product/{{$product->id}}">
        <div class="item_card__image">
            {{-- TODO: fix image path --}}
            <img src="{{asset('img/temp-card-img.png')}}" alt="">
            @if(isset($product->new_price))
                <div class="item_card__sale">Sale</div>
            @endif
        </div>
        <p class="item_card__title">{{$product->title}}</p>
        <div class="item_card__prices">
            @if(isset($product->new_price))
                <p class="item_card__discount"> &euro;{{$product->price}}</p>
                <p class="item_card__price">&euro;{{$product->new_price}}</p> 
            @else
            <p class="item_card__price">&euro;{{$product->price}}</p> 
            @endif
        </div>
    </a>

</div>

{{-- 
    example how to use: 
        <x-item-card :product="$product"> </x-item-card> where $product is from db
--}}