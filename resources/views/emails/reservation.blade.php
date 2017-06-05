
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>{{ $page_title }} <small>booked by {{$reservationName}}</small></h2>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <p>Time: <br>
                From {{ date("g:ia\, jS M Y", strtotime($startTime)) . ' until ' . date("g:ia\, jS M Y", strtotime($endTime)) }}.
            </p>

        </div>
    </div>

    <a href="http://brewery.dev/"><button class="btn btn-primary">Go To The Website</button></a>

    <br>
    Thanks,<br>
    {{ config('app.name') }}

