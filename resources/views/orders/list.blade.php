@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">
            <h1>lista de ordenes</h1>

            <ul class="list-group">
                @forelse($orders as $order)
                <li class="list-group-item"><a href="{{ route('orders.details', $order) }}">{{ $order->client }}</a></li>
                {{ $order->deliver_date}}
                @if($order->enable == 2)
                <li class="bg-danger text-white w-20">Cancelado</li>
                @elseif($order->enable == 0)
                <li class="bg-success text-white w-20">Entregado</li>
                @elseif($order->enable == 1)
                <li class="bg-warning text-white w-20">Pendiente</li>
                @endif
                <br>
                @empty
                <li>No hay ordenes para mostrar</li>
                @endforelse
                {{ $orders->links() }}
            </ul>
        </div>
    </div>
</div>

@endsection