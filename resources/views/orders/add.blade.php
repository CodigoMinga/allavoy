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
    <input type="text" class="form-control" name="address" value="{{ old('address', '') }}">
</label>
<br>
<label>
    Fecha <br>
    <input type="date" class="form-control" name="deliver_date" value="{{ old('delver_date', '') }}">
</label>
<br>
<label>
    Hora <br>
    <input type="time" class="form-control" name="deliver_hour" value="{{ old('delver_hour', '') }}">
</label>
<br>
<label>
    Valor declarado <br>
    <input type="integer" class="form-control" name="cost" value="{{ old('cost', '') }}">
</label>
<br>
<form action="/action_page.php">
  <label for="order_type">Tipo de orden:</label>
  <select name="order_type" id="order">
  
  <option value="0" >Compra</option>
  <option value="1">Encargo</option>
  </select>
  <br>
</form>
<br>
<form action="/action_page.php">
  <label for="deliveryuser_id">Elija un repartidor:</label>
  <select name="deliveryuser_id" id="deliveruser_id">
  @forelse($users as $user)
  <option value="{{ $user->id }}">{{ $user->name }}</option>
    @empty
        <li>No hay repartidor para mostrar</li>
    @endforelse 
    

  </select>
  <br><br>
  <input class="btn btn-primary" type="submit" value="Guardar"> <br>
</form>

</form>


@endsection