@extends('layout')

@section('title', 'Crear orden')

@section('content')
    <h1>Crear ordeno</h1>
    
    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.store')}}">
        
        @include('projects._form', ['btnText' => 'Guardar'])

    </form>

@endsection