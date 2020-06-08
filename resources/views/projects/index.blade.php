@extends('layout')

@section('title', 'Ordenes')

@section('content')
    <h1>@lang('Ordenes')</h1>
    
    @auth
    <a href="{{ route('projects.create') }}">Crear oeden</a>
    @endauth

    <ul>

            @forelse($projects as $project)
                <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>

            @empty
                <li>No hay ordenes para mostrar</li>
            @endforelse 
            {{ $projects->links() }}

    </ul>
 

@endsection
