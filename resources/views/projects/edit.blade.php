@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
    <h1>Editar orden</h1>
    
    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @method('PATCH')
        
        @include('projects._form', ['btnText' => 'Editar'])

    </form>
 
@endsection
