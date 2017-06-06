@extends('layouts.master')
@section('content')

    <head>
        <!-- Custom styles for this template -->
        <link href="css/blog.css" rel="stylesheet">
    </head>

    <body>

    <div class="container gapFromNav">

        <div class="row">

            <div class="col-sm-8 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title">{{ $post->title }}</h2>
                    <p class="blog-post-meta">{{ $post->created_at->toDateString() }}</p>

                    <p>{{ $post->body }}</p>
                </div><!-- /.blog-post -->

                <hr>

                @include('layouts.errors')

                @if (session('message'))
                    <div class="alert alert-info">{{ session('message') }}</div>
                @endif

                <h4>Comments:</h4>
                <div class="comments">
                    <ul class="list-group">
                        @foreach($post->comments as $comment)
                            <li class="list-group-item">
                                <strong>
                                    {{ $comment->created_at->diffForHumans() }}
                                    <em>by {{ $comment->user->name }} :&nbsp;</em>
                                </strong>
                                {{ $comment->body }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="card">
                    <div class="card-block">

                        <form action="/posts/{{ $post->id }}/comments" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <textarea class="form-control" name="body" id="body"
                                          placeholder="Your comment here" required></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Comment</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div><!-- /.blog-main -->

            @include('layouts.PostSideBar')

        </div><!-- /.row -->

    </div><!-- /.container -->

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
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
    </html>

@endsection