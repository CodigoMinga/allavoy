@extends('partials.maincontainer')
@section('content')

<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">
            <h1>Registrese</h1>
            <form method="POST" action="{{ route('users.store')}}">
                @csrf
                <label>
                    Nombre de usuario: <br>
                    <input type="text" class="form-control" name="name" value="{{ old('user', '') }}">
                </label><br>
                <label>
                    Email: <br>
                    <input type="email" class="form-control" name="email" value="{{ old('email', '') }}">
                </label><br>
                <label>
                    Clave: <br>
                    <input type="text" class="form-control" name="password" value="{{ old('password', '') }}">
                </label><br>
                <label for="rol">Rol:</label>
                <select name="rol" id="rol">

                    <option value="administrador">Administrador</option>
                    <option value="repartidor">Repartidor</option>
                </select>
                <br>
                <input class="btn btn-primary" type="submit" value="Guardar"> <br>
            </form>
        </div>
    </div>
</div>
@endsection