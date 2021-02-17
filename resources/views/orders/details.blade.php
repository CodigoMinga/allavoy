@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">
            <h1>Detalles de orden</h1>
            <ul class="list-group">
                <li class="list-group-item">Folio: {{ $order->id }}</li>
                <li class="list-group-item">Descripcion: {{ $order->description }}</li>
                <li class="list-group-item">Entregar a: {{ $order->client }}</li>
                <li class="list-group-item">Direccion: {{ $order->address }}</li>
                <li class="list-group-item">Telefono: {{ $order->phone }}</li>
                <li class="list-group-item">Local: {{ $order->friendshoplocal->name }} </li>
                <li class="list-group-item">Fecha de entrega: {{ $order->deliver_date }}</li>
                <li class="list-group-item">Hora de entrega: {{ $order->deliver_hour }}</li>
                <li class="list-group-item">Valor declarado: ${{ $order->cost }}</li>
                <li class="list-group-item">tipo de pago: {{ $order->paytype->name }}</li>
                <li class="list-group-item">tipo de orden: {{ $order->ordertype->name }}</li>
                <li class="list-group-item">Estado de orden:
                    @if($order->status_id == 0)
                        <span class='badge badge-warning'> Pendiente</span>
                    @elseif($order->status_id == 1)
                        <span class='badge badge-success'> Entregado</span>

                    @elseif($order->status_id == 2)
                        <span class='badge badge-danger'> Cancelado</span>
                    @else
                        <span class='badge badge-secondary'>Desconocido</span>
                    @endif
                </li>
                <li class="list-group-item">Repartidor Asignado : {{ $order->deliveryuser->name }} </li>
            </ul>
            <a class="btn btn-primary" href="{{ route('orders.change', $order)}}">Editar</a>
        </div>
    </div>
</div>
@endsection
