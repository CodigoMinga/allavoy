@extends('partials.maincontainer')
@section('content')

<h1>lista de locales</h1>

<ul>

    @forelse($friendshops as $friendshop)
        <li><a href="{{ route('friendshops.details', $friendshop) }}">{{ $friendshop->name }}</a></li>
        <br>
    @empty
        <li>No hay ordenes para mostrar</li>
    @endforelse 
    {{ $friendshops->links() }}

</ul>


@endsection