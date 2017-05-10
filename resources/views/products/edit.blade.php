@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 gapFromNav">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Manufacturer</div>

                    <div class="panel-body">
                        @if ($errors->count() > 0)
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{ route('manufacturers.update', $manufacturer->id) }}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            Name:
                            <br/>
                            <input type="text" name="name" value="{{ $manufacturer->name }}" required/>
                            <br/><br/>
                            Description:
                            <br/>
                            <textarea name="description" required
                                      style="margin: 0; width: 353px; height: 50px;"> {{ $manufacturer->description }} </textarea>
                            <br/><br/>
                            <input type="submit" value="Submit" class="btn btn-primary"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection