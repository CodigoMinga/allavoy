@extends('partials.maincontainer')
@section('content')
<br/>
<div class="container ">

    @forelse($orders as $order)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Cliente: {{$order->client}}</h5>
            <b>Folio:</b> {{$order->id}}<br/>
            <b>Descripcion:</b> {{$order->description}}<br/>
            <b>Local Amigo:</b> {{$order->friendshoplocal->name}}<br/>
            <b>Direccion:</b> {{$order->address}}<br/>
            <b>Tipo Pago:</b> {{$order->paytype->name}}<br/>
            <b>Tipo Entrega:</b> {{$order->ordertype->name}}<br/>

            <div class="row">

                <a href="https://api.whatsapp.com/send?phone=56{{$order->phone}}&text=Hola" class="btn btn-success"><i class="fa fa-whatsapp"></i>Whatsapp</a>

                <a href="tel:{{$order->phone}}" class="btn btn-success"><i class="fa fa-phone"></i> Llamar</a>

                <a href="{{url('/')}}/app/jobdone/{{$order->id}}" class="btn btn-primary">Entregar</a>


            </div>

    </div>
    @empty
            <b>Sin Entregas Pendientes</b>
    @endforelse


</div>
@endsection
