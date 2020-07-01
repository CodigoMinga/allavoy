@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">
            <h1>Ordenes de: {{auth()->user()->name}}</h1>

            <ul>
                @forelse($orders as $order)
                @if($order->enable == 1)
                @if($order->deliveryuser->id == auth()->user()->id)
                <li><a href="{{ route('orders.details', $order) }}">{{ $order->client }}</a></li>
                {{ $order->deliver_date}}<br>
                <a class="btn btn-primary" href="{{ route('orders.jobdone', $order->id) }}">Entregado</a>
                <br>
                @endif
                @endif
                @empty
                <li>No tienes ordenes pendientes</li>
                @endforelse

            </ul>
        </div>
    </div>
</div>
@endsection