@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">
            <h1>Ordenes de: {{auth()->user()->name}}</h1>
            <ul class="list-group">
                @forelse($orders as $order)
                @if($order->status_id == 0)
                @if($order->deliveryuser->id == auth()->user()->id)
                <li class="list-group-item"><a href="{{ route('orders.details', $order) }}">{{ $order->client }}</a></li>
                {{ $order->deliver_date}}<br>
                <center><a class="btn btn-primary w-25" href="{{ route('orders.jobdone', $order->id) }}">Entregado</a></center>
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
