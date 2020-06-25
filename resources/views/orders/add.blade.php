@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">

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
                <label for="friendshop_id">Tipo de orden:</label>
                <select name="friendshop_id" id="friendshop_id">
                    <option value="">Externo</option>
                    @forelse($friendshops as $friendshop)
                    <option value="{{ $friendshop->id }}">{{ $friendshop->name }}</option>
                    @empty
                    <li>Aun no hay locales amigos</li>
                    @endforelse


                </select>
                <br>

                <label for="order_type">Tipo de orden:</label>
                <select name="order_type" id="order">

                    <option value="0">Compra</option>
                    <option value="1">Encargo</option>
                </select>
                <br>

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

        </div>
    </div>
</div>


@endsection