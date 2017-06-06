@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 gapFromNav">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a new Post</div>

                    <div class="panel-body">

                        @include('layouts.errors')

                        <form action="{{ route('posts.store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" name="title" class="form-control" id="title" required
                                       placeholder="Post title" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="body">Body:</label>
                                <textarea name="body" class="form-control" id="body" required
                                          placeholder="Post body"
                                          style="margin: 0px; width: 100%; height: 50px;">{{ old('body') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="custom-file">
                                    <input type="file" id="file" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>

                            <input type="submit" value='Publish' class="btn btn-primary"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection