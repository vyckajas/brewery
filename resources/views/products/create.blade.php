@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 gapFromNav">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Product</div>

                    <div class="panel-body">

                        @if ($errors->count() > 0)
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form action="{{ route('products.store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('Manufacturer') ? ' has-error' : '' }}">
                                <label for="manufacturer_id" class="control-label">Manufacturer:</label>
                                <select id="manufacturer_id" name="manufacturer_id" class="form-control">
                                    <option selected disabled>Choose here</option>
                                    @foreach ($manufacturers as $manufacturer)
                                        <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="productName">Name:</label>
                                <input type="text" name="productName" class="form-control" id="productName"
                                       placeholder="Product name" required>
                            </div>
                            <div class="form-group">
                                <label for="productDescription">Description:</label>
                                <textarea name="productDescription" class="form-control" id="productDescription"
                                          placeholder="Product description" required
                                          style="margin: 0px; width: 100%; height: 50px;">{{ old('productDescription') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="custom-file">
                                    <input type="file" id="file" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>

                            <input type="submit" value='Submit' class="btn btn-primary"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection