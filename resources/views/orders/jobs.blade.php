@extends('partials.maincontainer')
@section('content')
<h1>Ordenes de: {{auth()->user()->name}}</h1>

<ul>
    @forelse($orders as $order)
        @if($order->deliveryuser->id == auth()->user()->id)
    <li><a href="{{ route('orders.details', $order) }}">{{ $order->client }}</a></li>
        {{ $order->deliver_date}}
        <br>
        @endif
    @empty
        <li>No tienes ordenes pendientes</li>
    @endforelse 

</ul>

@endsection