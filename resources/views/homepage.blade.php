<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>I'm sad and alone</title>

        <!-- CSS -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/homepage.css')}}" rel="stylesheet">
    </head>
    <body>
        <x-navigation></x-navigation>
        <div class="intro">
            <div class="intro__content">
                <h1>You can't buy happiness <br> but you can buy a board game.</h1>
                <p> And that's pretty close</p>
                <a href="/catalogue">Go to catalogue</a>
            </div>
        </div>
        <div class="content wrapper">
            <div class="about">
                <h2>Obsessive Attention. Intelligent Effort.</h2>
                <p>Functional board games made of luxurious and honest materials to improve people's lives in small but mighty ways.</p>
            </div>
            <div class="catalog">
                @foreach($products as $product)
                    <x-item-card :product="$product"> </x-item-card>
                @endforeach
            </div>
            <div class="video">
                <iframe src="https://www.youtube.com/embed/MHhp9NEF79E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="ads">
                <div class="ads__card">
                    <img src="{{asset('img/homepage_ad1.png')}}" alt="logo">
                    <p>"The leather is sourced from environmentally friendly tanneries in Italy, France, and Turkey, where Rure is based and everything is assembled by hand."</p>
                </div>
                <div class="ads__card">
                    <img src="{{asset('img/homepage_ad2.png')}}" alt="logo">
                    <p>"All too often, we're forced to pick: style, or sustainability. Recently, more designers have been making environmental impact a top priority"</p>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
