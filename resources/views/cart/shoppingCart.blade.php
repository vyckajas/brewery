@extends('layouts.master')

@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 gapFromNav">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">Quantity: &nbsp;{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['productName'] }}</strong>
                            <span class="label label-success">{{ $product['price'] }} €</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle"
                                        data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by
                                            1</a></li>
                                    <li><a href="{{ route('removeItem', ['id' => $product['item']['id']]) }}">Remove
                                            item</a></li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }} €</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ 'checkout' }}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-4 col-md-offset-4 gapFromNav">
                <h2>No Items In Shopping Cart!</h2>
            </div>
        </div>
    @endif
@endsection