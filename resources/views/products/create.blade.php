@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 gapFromNav">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Product</div>

                    <div class="panel-body">

                        @include('layouts.errors')

                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
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
                                       placeholder="Product name" value="{{ old('productName') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="productDescription">Description:</label>
                                <textarea name="productDescription" class="form-control" id="productDescription"
                                          placeholder="Product description" required
                                          style="margin: 0px; width: 100%; height: 50px;">{{ old('productDescription') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="number" name="price" class="form-control" id="price"
                                       placeholder="Product price" value="{{ old('price') }}" required>
                            </div>
                            {{--<div class="form-group">--}}
                            {{--<label class="custom-file">--}}
                            {{--<input type="file" id="file" name="file" class="custom-file-input">--}}
                            {{--<span class="custom-file-control"></span>--}}
                            {{--</label>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <label for="imagePath">Image URL</label>
                                <input id="imagePath" name="imagePath" type="text" placeholder="Image URL"
                                       class="form-control">
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="file">Or Choose a File</label>--}}
                                {{--<input id="file" name="file" class="input-file" type="file">--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--</div>--}}

                            <input type="submit" value='Submit' class="btn btn-primary"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection