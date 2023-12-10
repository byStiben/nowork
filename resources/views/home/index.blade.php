@extends('layouts.app',['title' => 'Home'])

@section('content')

    @auth
            @if (auth()->user()->role_id == 1)
                <p>Rol: Administrador</p>
            @elseif (auth()->user()->role_id == 2)
                <p>Rol: Instructor</p>
            @elseif (auth()->user()->role_id == 3)
                <p>Rol: Reclutador</p>
            @elseif (isset($user) && auth()->user()->role_id == 4)
                <p>Rol: Candidato</p>
            @endif
                <span>Hola</span>
        @endauth
        @guest
            <p>Usuario invitado</p>
            <nav>
                <menu>
                    <a href="{{ route('login') }}">Iniciar sesión</a>
                    <a href="{{ route('user.create') }}">Nuevo Usuario</a>
                </menu>
            </nav>
        @endguest


@endsection
