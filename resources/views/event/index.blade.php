@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div id='calendar'></div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{ url('fullcalendar') }}/fullcalendar.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            var base_url = '{{ url('/calendar') }}';

            $('#calendar').fullCalendar({
                weekends: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: false,
                eventLimit: true, // allow "more" link when too many events
                events: {
                    url: base_url + '/api',
                    error: function () {
                        alert("cannot load json");
                    }
                }
            });
        });
    </script>
@endsection