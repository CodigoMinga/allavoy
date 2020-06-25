@extends('partials.maincontainer')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 text-center ">    
        <h1>Inicio</h1>
        <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Secion iniciada!
                </div>
            @guest
            <a href="{{ route('login') }}">Login</a>
            @endguest
        </div>
    </div>
</div>

@endsection