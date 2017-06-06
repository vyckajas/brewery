@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 gapFromNav">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Product</div>

                    <div class="panel-body">
                        @if ($errors->count() > 0)
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{ route('products.update', $product->id) }}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('Manufacturer') ? ' has-error' : '' }}">
                                <label for="manufacturer_id" class="control-label">Manufacturer:</label>
                                <select id="manufacturer_id" name="manufacturer_id" class="form-control">

                                    @foreach ($manufacturers as $manufacturer)
                                        <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }} </option>
                                    @endforeach
                                    <option selected>{{ $manufacturer->name }}</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="productName">Name:</label>
                                <input type="text" name="productName" class="form-control" id="productName"
                                       placeholder="Product name" value="{{ $product->productName }}" required>
                            </div>
                            <div class="form-group">
                                <label for="productDescription">Description:</label>
                                <textarea name="productDescription" class="form-control" id="productDescription"
                                          placeholder="Product description" required
                                          style="margin: 0px; width: 100%; height: 50px;">{{ $product->productDescription }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="number" name="price" class="form-control" id="price"
                                       placeholder="Product price" value="{{ $product->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="imagePath">Image URL</label>
                                <input id="imagePath" name="imagePath" type="text" placeholder="Image URL"
                                       class="form-control" value="{{ $product->imagePath }}" required>
                            </div>

                            <input type="submit" value='Submit' class="btn btn-primary"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection