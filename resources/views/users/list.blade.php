@extends('partials.maincontainer')
@section('content')

<h1>lista de usuarios</h1>

<ul>

    @forelse($users as $user)
    <li><a href="#">{{ $user->name }}</a></li>

    <br>
    @empty
    <li>No hay usuarios para mostrar</li>
    @endforelse
    {{ $users->links() }}

</ul>


@endsection