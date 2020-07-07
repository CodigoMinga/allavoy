@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">
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
                    <input type="date" class="form-control" name="deliver_date" value="{{ date('Y-m-d', strtotime($order->deliver_date)) }}">
                </label>
                <br>
                <label>
                    Hora <br>
                    <input type="time" class="form-control" name="deliver_hour" value="{{ $order->deliver_hour }}">
                </label>
                <br>
                <label>
                    Valor declarado <br>
                    <input type="integer" class="form-control" name="cost" value="{{ $order->cost }}">
                </label>
                <br>
                <label for="friendshop_id">Local:</label>
                <select name="friendshop_id" id="friendshop_id">
                    @forelse($friendshops as $friendshop)
                    <option value="{{ $friendshop->id }}">{{ $friendshop->name }}</option>
                    @empty
                    <li>Aun no hay locales amigos</li>
                    @endforelse
                </select>
                <br>
                <label for="order_type">Tipo de orden:</label>
                <select name="order_type" id="order">

                    <option value="0" {{$order->order_type == 0 ? 'selected' : '' }}>Compra</option>
                    <option value="1" {{$order->order_type == 1 ? 'selected' : '' }}>Encargo</option>
                </select>
                <br>

                <label for="enable">Estado de orden:</label>
                <select name="enable" id="order">

                    <option value="1" {{$order->enable == 1 ? 'selected' : ''}}>Pendiente</option>
                    <option value="0" {{$order->enable == 0 ? 'selected' : ''}}>Entregada</option>
                    <option value="2" {{$order->enable == 2 ? 'selected' : ''}}>Canselado</option>
                </select>
                <br>

                <label for="deliveryuser_id">Repartidor:</label>
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
        </div>
    </div>
</div>

@endsection