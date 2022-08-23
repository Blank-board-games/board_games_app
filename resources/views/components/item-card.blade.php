<div class="item_card">
    <div class="item_card__image">
        <img src="{{$imageSrc}}" alt="">
        @if(isset($oldPrice))
            <div class="item_card__sale">Sale</div>
        @endif
    </div>
    <p class="item_card__title">{{$title}}</p>
    @if(isset($oldPrice))
        <p class="item_card__discount"> &euro; {{$oldPrice}}</p>
    @endif
    <p class="item_card__price">&euro; {{$price}}</p>
</div>

{{--
    example how to use:
    <x-item-card imageSrc="{{asset('img/temp-card-img.png')}}" title="item title" price="1000.00" oldPrice="800.00" > </x-item-card>
--}}
