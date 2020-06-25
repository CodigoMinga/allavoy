@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">
            <h1>lista de ordenes</h1>

            <ul>

                @forelse($orders as $order)
                <li><a href="{{ route('orders.details', $order) }}">{{ $order->client }}</a></li>
                {{ $order->deliver_date}}
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