@extends('layouts.master')

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
                            <div class="form-group">

                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Manufacturer name"
                                       name="name" value="{{ old('name') }}" required/>
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>

                                <textarea name="description" class="form-control" id="description"
                                          placeholder="Manufacturer description" required
                                          style="margin: 0px; width: 100%; height: 50px;">{{ old('description') }}</textarea>

                            </div>
                            <input type="submit" value='Submit' class="btn btn-primary"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection