@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>{{ $event->title }}
                <small>booked by {{ $event->name }}</small>
            </h2>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <p>Time: <br>
                {{ date("g:ia\, jS M Y", strtotime($event->start_time)) . ' until ' . date("g:ia\, jS M Y", strtotime($event->end_time)) }}
            </p>

            <p>Duration: <br>
                {{ $duration }}
            </p>

            <p>
            <form action="{{ url('events/' . $event->id) }}" style="display:inline;" method="POST">
                <input type="hidden" name="_method" value="DELETE"/>
                {{ csrf_field() }}
                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"
                                                                aria-hidden="true"></i> Delete
                </button>
            </form>
            <a class="btn btn-primary" href="{{ url('events/' . $event->id . '/edit')}}">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

            </p>

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
                    "format": "DD/MM/YYYY HH:mm:ss",
                    "separator": " - "
                }
            });
        });
    </script>
@endsection