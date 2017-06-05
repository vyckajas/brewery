@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2 gapFromNav">
            <h1>User Profile</h1>
            <hr>
            <h2>My Orders</h2>
            @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">{{ $item['price'] }} €</span>
                                    <strong> {{ $item['item']['productName'] }}</strong> | {{ $item['qty'] }} Units
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <strong>
                            Total Price: {{ $order->cart->totalPrice }} €
                        </strong>
                        <strong class="pull-right">
                            Order ID: &nbsp; {{ $order->id }}
                        </strong>
                    </div>
                </div>
            @endforeach
            <strong class="list-group-item">
                User ID: &nbsp; {{ $order->user_id }}
            </strong>
        </div>
    </div>
@endsection