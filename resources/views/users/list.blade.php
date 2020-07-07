@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">
            <h1>lista de usuarios</h1>
            <ul class="list-group">
                @forelse($users as $user)
                <li class="list-group-item"><a href="#">{{ $user->name }}</a></li>
                <br>
                @empty
                <li>No hay usuarios para mostrar</li>
                @endforelse
                {{ $users->links() }}
            </ul>
        </div>
    </div>
</div>

@endsection