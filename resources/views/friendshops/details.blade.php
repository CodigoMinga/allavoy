@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">
            <h1>Detalles de local</h1>
            <ul>
                <li>Folio: {{ $friendshop->id }}</li>
                <li>Nombre: {{ $friendshop->name }}</li>
                <li>Direccion: {{ $friendshop->address }}</li>
                <li>Habilitado: {{ $friendshop->enable }}</li>
            </ul>
        </div>
    </div>
</div>

@endsection