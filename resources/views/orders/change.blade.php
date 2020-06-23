@extends('partials.maincontainer')
@section('content')


<H1>Editar orden</H1>

<form method="POST" action="{{ route('orders.upgrade', $order)}}">
    @csrf @method('PATCH')

<label>
    Entregar a: <br>
    <input type="text" class="form-control" name="client" value="{{ $order->client }}">
</label>
<br>
<label>
    Direccion <br>
    <input type="text" class="form-control" name="address" value="{{ $order->address }}">
</label>
<br>
<label>
    Fecha <br>
    <input type="date" class="form-control" name="deliver_date" value="{{ $order->delver_date }}">
</label>
<br>
<label>
    Hora <br>
    <input type="time" class="form-control" name="deliver_hour" value="{{ $order->delver_hour }}">
</label>
<br>
<label>
    Valor declarado <br>
    <input type="integer" class="form-control" name="cost" value="{{ $order->cost }}">
</label>
<br>
<form action="/action_page.php">
  <label for="order_type">Tipo de orden:</label>
  <select name="order_type" id="order">

  <option  {{$order->order_type == 0 ? 'selected' : ''}}>Compra</option>
  <option  {{$order->order_type == 1 ? 'selected' : ''}}>Encargo</option>
  </select>
  <br>
</form>
<br>
<form action="/action_page.php">
  <label for="enable">Elejir estado de orden:</label>
  <select name="enable" id="order">
 
  <option  {{$order->enable == 0 ? 'selected' : ''}}>Pendiente</option>
  <option  {{$order->enable == 1 ? 'selected' : ''}}>Entregada</option>
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
  <input class="btn btn-primary" type="submit" value="Editar"> <br>
</form>

</form>


@endsection