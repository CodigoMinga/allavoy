@extends('partials.maincontainer')
@section('content')


<H1>Crear local amigo</H1>

<form method="POST" action="{{ route('friendshops.addProcess')}}">
    @csrf

<label>
    Nombre de local: <br>
    <input type="text" class="form-control" name="name" value="{{ old('name', '') }}">
</label>
<br>
<label>
    Direccion <br>
    <input type="text" class="form-control" name="address" value="{{ old('address', '') }}">
</label>
<br>
<label>
    Email <br>
    <input type="email" class="form-control" name="email" value="{{ old('email', '') }}">
</label>

<br>

  <input class="btn btn-primary" type="submit" value="Guardar"> <br>

</form>


@endsection