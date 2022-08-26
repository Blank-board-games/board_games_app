<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>I'm sad and alone</title>

        <!-- CSS -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/search.css')}}" rel="stylesheet">
    </head>
    <x-navigation></x-navigation>
    <div class="content search">
        <div class="search__header">
            <h1>Search results</h1>
            <form action="{{ action([App\Http\Controllers\CatalogueController::class, 'showSearch'])}}" class="search__form" method="get">
                <div class="search__container">
                    <input type="text" name="search" placeholder="Search"/>
                    <button class="search-icon" type="submit">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0108 12.7179C10.7372 13.8278 9.07208 14.5 7.25 14.5C3.24594 14.5 0 11.2541 0 7.25C0 3.24594 3.24594 0 7.25 0C11.2541 0 14.5 3.24594 14.5 7.25C14.5 9.07208 13.8278 10.7372 12.7179 12.0108L18.8536 18.1464L18.1464 18.8536L12.0108 12.7179ZM13.5 7.25C13.5 10.7018 10.7018 13.5 7.25 13.5C3.79822 13.5 1 10.7018 1 7.25C1 3.79822 3.79822 1 7.25 1C10.7018 1 13.5 3.79822 13.5 7.25Z"/>
                        </svg>
                    </button>
                </div>
            </form>
            @if(isset($products))
                <div>{{count($products)}} results found for "{{ Request::get('search')}}"</div>
            @endif
        </div>

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
    </body>
</html>
