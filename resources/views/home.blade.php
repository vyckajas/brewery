@extends('layouts.master')

@section('content')

    @include('layouts.productsHead')




    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">BeerBrewery</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
                etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            <p>
                <a href="{{ url('/events') }}" class="btn btn-primary">Reservation for degustation</a>
            </p>
        </div>
    </section>

    <div class="album text-muted">
        <div class="container">

            @can('create', \App\Manufacturer::class)
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
                <hr>
            @endcan

                @if (session('message'))
                    <div class="alert alert-info">{{ session('message') }}</div>
                @endif

            <div class="row">
                @foreach($posts as $post)
                    @include('posts.post')
                @endforeach
            </div>
        </div>
    </div>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        $(function () {
            Holder.addTheme("thumb", {background: "#55595c", foreground: "#eceeef", text: "Thumbnail"});
        });
    </script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


@endsection
