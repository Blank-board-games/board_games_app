<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I'm sad and alone</title>

    <!-- CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
</head>

<body>
    <x-navigation></x-navigation>

    <div class="content">
        <div class="contact_form">
            <div class="contact_form__text">
                <h1>Contact us</h1>
                <p class="hours">Hours</p>
                <div class="contact_form__time">
                    <p class="weekday" id="mon">Monday – Friday: 10:00am – 7:30pm</p>
                    <p class="weekday" id="sun">Saturday: 10:00am – 6:00pm</p>
                    <p class="weekday" id="sat">Sunday: 11:00am – 6:00pm</p>
                </div>
            </div>
            <form action="" class="contact_form__form">
                <div class="contact_form__first_row">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <input type="tel" name="phone" placeholder="Phone number">
                <textarea name="comment" id="" cols="30" rows="10" placeholder="Comment"></textarea>
                <button type="button">Send</button>
            </form>

        </div>
    </div>
    <x-footer></x-footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
