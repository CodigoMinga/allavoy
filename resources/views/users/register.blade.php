@extends('partials.maincontainer')
@section('content')


<h1>Registrese</h1>


<form method="POST" action="{{ route('orders.addProcess')}}">
    @csrf
    <label>
        Nombre de usuario: <br>
        <input type="text" class="form-control" name="user" value="{{ old('user', '') }}">
    </label><br>
    <label>
        Email: <br>
        <input type="email" class="form-control" name="email" value="{{ old('email', '') }}">
    </label><br>
    <label>
        Clave: <br>
        <input type="text" class="form-control" name="password" value="{{ old('password', '') }}">
    </label><br>
    
    <input class="btn btn-primary" type="submit" value="Guardar"> <br>
    
</form>

@endsection