<H1>Crear orden</H1>

<form method="POST" action="{{ route('orders.addProcess')}}">
    @csrf

<label>
    Entregar a: <br>
    <input type="text" name="client" value="{{ old('client', '') }}">
</label>
<br>
<label>
    Direccion <br>
    <input type="text" name="addres" value="{{ old('address', '') }}">
</label>
<br>
<label>
    Fecha <br>
    <input type="date" name="delive_date" value="{{ old('delver_date', '') }}">
</label>
<br>
<label>
    Hora <br>
    <input type="date" name="delive_hour" value="{{ old('delver_hour', '') }}">
</label>
<br>
<label>
    Valor declarado <br>
    <input type="text" name="cost" value="{{ old('cost', '') }}">
</label>
<br>
<button>Guardar</button>
</form>