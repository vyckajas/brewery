@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 style="text-align: center">Create a New Reservation</h2>
            <a style="vertical-align: text-top; margin-left: 20px; margin-top: 2px; display: inline-block"
            href="{{ url('/events') }}" class="btn btn-default">All Reservation's List</a>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-offset-3">

            <form action="{{ url('events') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group @if($errors->has('name')) has-error has-feedback @endif">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" name="name" placeholder="E.g. Pisyek"
                           value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span>
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="form-group @if($errors->has('title')) has-error has-feedback @endif">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title"
                           placeholder="E.g. Meeting with CEO Kicap Tawar Hebey" value="{{ old('title') }}">
                    @if ($errors->has('title'))
                        <p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span>
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
                <div class="form-group @if($errors->has('time')) has-error @endif">
                    <label for="time">Time</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="time" placeholder="Select your time"
                               value="{{ old('time') }}">
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
                "minDate": moment('<?php echo date('Y-m-d G')?>'),
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