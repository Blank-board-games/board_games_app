<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>I'm sad and alone</title>

        <!-- CSS -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <x-navigation></x-navigation>
    <div class="content">
        <h1>Search</h1>
        <form action="">
            <input type="text" name="search" id="search">
        </form>

        @if(isset($products))
        <div class="catalog">
            @foreach($products as $product)
                <x-item-card :product="$product"> </x-item-card>
            @endforeach
        </div>
        @endif

    </div>
    <x-footer></x-footer>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/search.js')}}"></script>
    </body>
</html>
