@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="row">
                <div class="col-md-12 ">
                    <h2 style="text-align: center">Edit Your Reservation</h2>
                    <a style="vertical-align: text-top; margin-left: 20px; margin-top: 2px; display: inline-block"
                    href="{{ url('/events') }}" class="btn btn-default">All Reservation's List</a>
                    <a style="vertical-align: text-top; margin-left: 20px; margin-top: 2px; display: inline-block"
                       href="{{ url('/events') }}/create" class="btn btn-primary">Add New Reservation</a>
                    <hr>
                </div>
            </div>

            @if($errors)
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif

            <form action="{{ url('events/' . $event->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT"/>
                <div class="form-group @if($errors->has('name')) has-error has-feedback @endif">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $event->name }}"
                           placeholder="E.g. Pisyek">
                    @if ($errors->has('name'))
                        <p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span>
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="form-group @if($errors->has('title')) has-error has-feedback @endif">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $event->title }}"
                           placeholder="E.g. My event's title">
                    @if ($errors->has('title'))
                        <p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span>
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
                <div class="form-group @if($errors->has('time')) has-error @endif">
                    <label for="time">Time</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="time"
                               value="{{ $event->start_time . ' - ' . $event->end_time }}"
                               placeholder="Select your time">
                        <span class="input-group-addon">
						<i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                    </div>
                    @if ($errors->has('time'))
                        <p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span>
                            {{ $errors->first('time') }}
                        </p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ url('js') }}/daterangepicker.js"></script>
    <script type="text/javascript">
        $(function () {
            $('input[name="time"]').daterangepicker({
                "timePicker": true,
                "timePicker24Hour": true,
                "timePickerIncrement": 15,
                "autoApply": true,
                "locale": {
                    "format": "YYYY-MM-DD HH:MM:SS",
                    "separator": " - "
                }
            });
        });
    </script>
@endsection