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
    <link rel="stylesheet" href="css/welcome.css">

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

        <div class="links">
            <a href="http://brewery.dev/manufacturers">Manufacturers</a>
            <a href="http://brewery.dev/products">Products</a>
            @can('create', \App\Manufacturer::class)
                <a href="#">Reservation for degustation</a>
            @endcan
            <a href="#">Menu</a>
            <a href="#">Contact Us</a>
        </div>
    </div>
</div>
</body>
</html>
