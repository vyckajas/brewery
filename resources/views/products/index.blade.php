@extends('layouts.master')
@include('layouts.productsHead')
@section('content')

    <div class="album text-muted">
        <div class="container">
            <div class="row">
                <h1 style="vertical-align: middle; display: inline-block; margin-top: 40px">All Assortment</h1>
                @can('create', \App\Manufacturer::class)
                    <a style="vertical-align: text-top; margin-left: 20px; margin-top: 2px"
                       href="{{ route('products.create') }}" class="btn btn-default">Add New Product</a>
                @endcan
            </div>
            @if (session('message'))
                <div class="alert alert-info">{{ session('message') }}</div>
            @endif
            @if (Session::has('success'))
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 gapFromNav">
                        <div id="charge-massage" class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                @forelse($products as $product)
                    <div class="product">
                        <div class="thumbnail">
                            <img src="{{ $product->imagePath }}"
                                 alt="Product image" class="img-responsive">
                            <h3>{{ $product->manufacturer->name }}</h3>
                            <hr>
                            <h4>{{ $product->productName }}</h4>
                            <p class="card-text">{{ $product->productDescription}}</p>
                            @can('create', \App\Manufacturer::class)
                                <hr>
                                <a href="{{ route('products.edit', $product->id) }}"
                                   class="btn btn-default">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}"
                                      method="POST"
                                      style="display: inline;"
                                      onsubmit="return confirm('Are you sure?');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                                <label class="control-label">Select picture</label>
                                <input id="input-2" name="input2[]" type="file" class="file" multiple
                                       data-show-upload="false" data-show-caption="true">
                                <hr>

                            @endcan
                            <div>
                                <div class="pull-left price">{{ $product->price }}€</div>
                                <a href="{{ route('addToCart', ['id' => $product->id])}}"
                                   class="btn btn-success pull-right" role="button">Add to Cart </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p colspan="3">No entries found.</p>
                @endforelse
            </div>
            {{ $products->links() }}
        </div>


    </div>

@endsection