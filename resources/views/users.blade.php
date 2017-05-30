@extends('layouts.master')


@section('title')
    Usuarios
@stop

@section('content')
    @if(Auth::check())
        Usuario Actual: {!!Auth::user()->username!!}. ( {!! Html::link('logout', 'Salir') !!} )

    @endif
    <hr>
    <h1>Listado de Usuarios</h1>

    @foreach($users as $user)
        <p>{!! $user->username !!} ({!! Html::link('users/'.$user->id, 'perfil') !!})</p> 
    @endforeach
@stop