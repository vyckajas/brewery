<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BeerBrewery</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/welcome.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            BeerBrewery
        </div>
        <div class="container">

            <div class="rio-promos">
                <img src="https://image.freepik.com/free-vector/beer-jar-poster_23-2147497788.jpg"/>
                <img src="https://image.freepik.com/free-vector/retro-poster-with-beers_23-2147506207.jpg"/>
                <img src="https://image.freepik.com/free-vector/beer-icons_23-2147506551.jpg"/>
                <img src="https://image.freepik.com/free-vector/premium-beer_23-2147520120.jpg"/>
                <img src="https://image.freepik.com/free-vector/various-hand-drawn-beer-round-stickers_23-2147630881.jpg"/>
                <img src="https://image.freepik.com/free-vector/beer-logo_23-2147499156.jpg"/>
                <img src="https://image.freepik.com/free-vector/beer-mugs-and-glasses_23-2147503268.jpg"/>
                <img src="https://image.freepik.com/free-vector/realistic-mug-of-beer-with-wooden-background_23-2147567557.jpg"/>
                <img src="https://image.freepik.com/free-vector/oktoberfest-pattern_23-2147503567.jpg"/>
                <img src="https://image.freepik.com/free-vector/oktoberfest-girl_23-2147503267.jpg"/>
                <img src="https://image.freepik.com/free-vector/pack-of-beer-stickers-in-retro-style_23-2147629906.jpg"/>
                <img src="https://image.freepik.com/free-vector/international-beer-day-vector-illustration-in-flat-style_1166-52.jpg"/>
            </div>
        </div>
        <br>

        <div class="links">
            <a href="http://brewery.dev/manufacturers">Manufacturers</a>
            <a href="http://brewery.dev/products">Products</a>
            @can('create', \App\Manufacturer::class)
                <a href="{{ url('/events') }}">Reservation for degustation</a>
            @endcan
            <a href="{{ url('contacts') }}">Contact Us</a>
        </div>
    </div>
</div>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script>


    jQuery(document).ready(function ($) {
        $('.rio-promos').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            responsive: [{
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
                {
                    breakpoint: 400,
                    settings: {
                        arrows: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
        });
    });
</script>

</body>
</html>
