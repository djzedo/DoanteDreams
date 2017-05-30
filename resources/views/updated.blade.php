@extends('layouts.master')

@section('title')
    Updated
@stop

@section('content')
    <h1>Tu perfil ha sido actualizado</h1>

    <p>Para ver tu perfil, presional el siguiente link:</p>

   <p>{!! Html::link('users/'.$id, 'My Profile') !!} </p>

    <p>Para retornar al inicio, presional el siguiente link:</p>
    
    <p>{!!Html::link('users', 'Inicio')!!}</p>

@stop