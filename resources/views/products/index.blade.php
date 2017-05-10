@extends('layouts.master')
@include('layouts.productsHead')
@section('content')

    <div class="album text-muted">
        <div class="container">
            <div class="row">
                <h1 style="vertical-align: middle; display: inline-block; margin-top: 40px">All Assortment</h1>
                <a style="vertical-align: text-top; margin-left: 20px; margin-top: 2px" href="{{ route('products.create') }}" class="btn btn-default">Add New Product</a>
            </div>
            <div class="row">
                @forelse($products as $product)
                    <div class="product">
                        {{--<img data-src="holder.js/100px280/thumb" alt="Card image cap">--}}
                        <h4>{{ $product->productName }}</h4>
                        <p class="card-text">{{ $product->productDescription }}</p>
                        @can('create', \App\Manufacturer::class)
                            <div>
                                <a href="{{ route('products.edit', $product->id) }}"
                                   class="btn btn-default">Edit</a>
                                @can('create', \App\Manufacturer::class)
                                    <form action="{{ route('products.destroy', $product->id) }}"
                                          method="POST"
                                          style="display: inline"
                                          onsubmit="return confirm('Are you sure?');">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        @endcan
                    </div>
                @empty
                        <p colspan="3">No entries found.</p>
                @endforelse
            </div>
        </div>
    </div>
    {{ $products->links() }}

@endsection