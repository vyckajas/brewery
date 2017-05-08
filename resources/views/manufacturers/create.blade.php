@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Manufacturer</div>

                    <div class="panel-body">

                        @if ($errors->count() > 0)
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form action="{{ route('manufacturers.store') }}" method="post">
                            {{ csrf_field() }}
                            Name:
                            <br/>
                            <input type="text" name="name" value="{{ old('name') }}" required/>
                            <br/><br/>
                            Description:
                            <br/>
                            <textarea name="description" required
                                      style="margin: 0px; width: 353px; height: 50px;">{{ old('description') }}</textarea>
                            {{--<input type="text" name="last_name" value="{{ old('last_name') }}" />--}}
                            <br/><br/>
                            <input type="submit" value='Submit' class="btn btn-primary"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection