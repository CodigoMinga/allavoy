@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <label class="col-12 text-center ">

            <H1>Crear orden</H1>

            <form method="POST" action="{{ route('orders.addProcess')}}">
                @csrf



                <label>
                    Entregar a: <br>
                    <input type="text" class="form-control" name="client" value="{{ old('client', '') }}">
                </label>
                <br>
                <label>
                    <label for="exampleFormControlTextarea1">Descripcion</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </label>
                <br/>
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
                <label for="paytype_id">Local:</label>
                <select name="paytype_id" id="paytype_id">
                    @forelse($paytypes as $paytype)
                        <option value="{{ $paytype->id }}">{{ $paytype->name }}</option>
                    @empty
                        <li>Aun no hay tipos de pago</li>
                    @endforelse
                </select>
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

                <select name="ordertype_id" id="ordertype_id">
                    @forelse($ordertypes as $ordertype)
                        <option value="{{ $ordertype->id }}">{{ $ordertype->name }}</option>
                    @empty
                        <li>Aun no hay tipos de orden</li>
                    @endforelse
                </select>
                <br>
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
                <input class="btn btn-primary" type="submit" value="Guardar"> <br>
            </form>
        </div>
    </div>
</div>


@endsection
