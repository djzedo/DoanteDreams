@extends('layouts.master')

@section('title')
    Perfil de {!!$user->username!!}
@stop

@section('content')
    <h1>Hola {!!$user->username!!}</h1>

    <h3>Tus Proyectos:</h3> 
    

    @if($owner)
    {!! Html::link('users/'.$user->id.'/edit', 'Editar Mi Perfil') !!}
    @endif

@stop