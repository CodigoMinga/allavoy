@extends('partials.maincontainer')
@section('content')

<h1>Detalles de local</h1>
<ul>
    <li>Folio: {{ $friendshop->id }}</li>
    <li>Nombre: {{ $friendshop->name }}</li>
    <li>Direccion: {{ $friendshop->address }}</li>
    <li>Habilitado: {{ $friendshop->enable }}</li>
</ul>


@endsection