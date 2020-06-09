@extends('partials.maincontainer')
@section('content')

<h1>Detalles de orden</h1>
<ul>
    <li>Folio: {{ $order->id }}</li>
    <li>Entregar a: {{ $order->client }}</li>
    <li>Direccion: {{ $order->address }}</li>
    <li>Fecha de entrega: {{ $order->deliver_date }}</li>
    <li>Hora de entrega: {{ $order->deliver_hour }}</li>
    <li>Valor declarado: {{ $order->cost }}</li>
    <li>Habilitado: {{ $order->enable }}</li>
</ul>

<a href="{{ route('orders.list')}}">Lista</a> <br>
<a href="{{ route('orders.add')}}">Agregar ornden</a>

@endsection