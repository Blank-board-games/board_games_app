

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

    <x-product-add-form :categories="$categories"></x-product-add-form>
    <x-category-add-form></x-category-add-form>


    <div class="test">
        <h2>Helo</h2>
    </div>
    <x-footer></x-footer>
    <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
