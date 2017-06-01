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

     {!! Form::open(['url' => '/login']) !!}
        <p>{!! Form::submit('volver al inicio', array('class' => 'btn btn-primary btn-block btn-large')) !!}</p>

    {!! Form::close() !!}
@stop