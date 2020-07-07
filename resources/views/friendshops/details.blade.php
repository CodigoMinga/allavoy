@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">
            <h1>Detalles de local</h1>
            <ul class="list-group">
                <li class="list-group-item">Folio: {{ $friendshop->id }}</li>
                <li class="list-group-item">Nombre: {{ $friendshop->name }}</li>
                <li class="list-group-item">Direccion: {{ $friendshop->address }}</li>
                <li class="list-group-item">Habilitado: {{ $friendshop->enable }}</li>
            </ul>
        </div>
    </div>
</div>

@endsection