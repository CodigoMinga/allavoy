@extends('partials.maincontainer')
@section('content')

<h1>Inicio</h1>

@guest
<a href="{{ route('login') }}">Login</a>
@endguest






@endsection