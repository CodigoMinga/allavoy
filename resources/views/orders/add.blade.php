@extends('partials.maincontainer')


@section('content')


<H1>Crear orden</H1>

<form method="POST" action="{{ route('orders.addProcess')}}">
    @csrf

<label>
    Entregar a: <br>
    <input type="text" class="form-control" name="client" value="{{ old('client', '') }}">
</label>
<br>
<label>
    Direccion <br>
    <input type="text" name="address" value="{{ old('address', '') }}">
</label>
<br>
<label>
    Fecha <br>
    <input type="date" name="deliver_date" value="{{ old('delver_date', '') }}">
</label>
<br>
<label>
    Hora <br>
    <input type="time" name="deliver_hour" value="{{ old('delver_hour', '') }}">
</label>
<br>
<label>
    Valor declarado <br>
    <input type="decimal" name="cost" value="{{ old('cost', '') }}">
</label>
<br>
<button class="btn btn-primary">Guardar</button>
</form>

<a href="{{ route('orders.list')}}">Lista</a>

@endsection