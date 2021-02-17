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
                    <label for="exampleFormControlTextarea1">Descripcion</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{$order->description}}</textarea>
                </label>
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
                <label for="paytype_id">Tipo Pago:</label>
                <select name="paytype_id" id="paytype_id">
                    @forelse($paytypes as $paytype)
                        @if($paytype->id == $order->paytype_id)
                            <option selected value="{{ $paytype->id }}">{{ $paytype->name }}</option>
                        @else
                            <option value="{{ $paytype->id }}">{{ $paytype->name }}</option>
                        @endif

                    @empty
                        <li>No Hay Metodos de pago</li>
                    @endforelse
                </select>
                <br>
                <label for="friendshop_id">Local:</label>
                <select name="friendshop_id" id="friendshop_id">
                    @forelse($friendshops as $friendshop)
                        @if($friendshop->id == $order->friendshop_id)
                            <option selected value="{{ $friendshop->id }}">{{ $friendshop->name }}</option>
                        @else
                            <option value="{{ $friendshop->id }}">{{ $friendshop->name }}</option>
                        @endif

                    @empty
                    <li>Aun no hay locales amigos</li>
                    @endforelse
                </select>
                <br>
                <label for="order_type">Tipo de orden:</label>
                <select name="ordertype_id" id="ordertype_id">
                    @forelse($ordertypes as $ordertype)
                        @if($ordertype->id == $order->ordertype_id)
                            <option selected value="{{ $ordertype->id }}">{{ $ordertype->name }}</option>
                        @else
                            <option value="{{ $ordertype->id }}">{{ $ordertype->name }}</option>
                        @endif

                    @empty
                        <li>Aun no hay locales amigos</li>
                    @endforelse
                </select>
                <br>

                <label for="enable">Estado de orden:</label>
                <select name="enable" id="order">

                    <option value="1" {{$order->status_id == 0 ? 'selected' : ''}}>Pendiente</option>
                    <option value="0" {{$order->status_id == 1 ? 'selected' : ''}}>Entregada</option>
                    <option value="2" {{$order->status_id == 2 ? 'selected' : ''}}>Canselado</option>
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
