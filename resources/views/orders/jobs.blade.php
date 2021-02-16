@extends('partials.maincontainer')
@section('content')
<br/>
<div class="container ">

    @forelse($orders as $order)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Cliente: {{$order->client}}</h5>
            <b>Folio:</b> {{$order->id}}<br/>
            <b>Local Amigo:</b> {{$order->friendshoplocal->name}}<br/>
            <b>Direccion:</b> {{$order->address}}<br/>
            <b>Tipo Pago:</b> {{$order->paytype->name}}<br/>
            <b>Tipo Entrega:</b> {{$order->ordertype->name}}<br/>
            <a href="{{url('/')}}/app/jobdone/{{$order->id}}" class="btn btn-primary">Entregar</a>
        </div>
    </div>
    @empty
            <b>Sin Entregas Pendientes</b>
    @endforelse


</div>
@endsection
