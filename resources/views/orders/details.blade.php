@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">
            <h1>Detalles de orden</h1>
            <ul>
                <li>Folio: {{ $order->id }}</li>
                <li>Entregar a: {{ $order->client }}</li>
                <li>Direccion: {{ $order->address }}</li>
                <li>Fecha de entrega: {{ $order->deliver_date }}</li>
                <li>Hora de entrega: {{ $order->deliver_hour }}</li>
                <li>Valor declarado: ${{ $order->cost }}</li>
                <li>Habilitado: {{ $order->enable }}</li>
                <li>Repartidor Asignado : {{ $order->deliveryuser->name }} </li>
            </ul>

            <a class="btn btn-primary" href="{{ route('orders.change', $order)}}">Editar</a>
        </div>
    </div>
</div>
@endsection