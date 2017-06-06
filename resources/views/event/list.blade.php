@extends('layouts.master')
@section('content')
    @include('message')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 style="text-align: center">All Reservation's List</h2>
            <a style="vertical-align: text-top; margin-left: 20px; margin-top: 2px; display: inline-block"
               href="{{ url('/events') }}/create" class="btn btn-primary">Add New Reservation</a>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @if($events->count() > 0)
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Event's Title</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;?>
                    @foreach($events as $event)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td><a href="{{ url('events/' . $event->id) }}">{{ $event->title }}</a></td>
                            <td>{{ date("g:ia\, jS M Y", strtotime($event->start_time)) }}</td>
                            <td>{{date("g:ia\, jS M Y", strtotime($event->end_time)) }}</td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{ url('events/' . $event->id . '/edit')}}">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                <form action="{{ url('events/' . $event->id) }}" style="display:inline"
                                      method="POST">
                                    <input type="hidden" name="_method" value="DELETE"/>
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash"
                                                                                           aria-hidden="true"></i>
                                        Delete
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h2 style="text-align: center">No Reservation's yet!</h2>
            @endif
        </div>
    </div>
@endsection
