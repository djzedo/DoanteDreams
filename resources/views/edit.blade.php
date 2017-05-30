@extends('layouts.master')

@section('title')
    Editar Perfil
@stop

@section('content')
   
    <h1>Edita tu Perfil</h1>

    @foreach($errors->all() as $error)
        <p>{!!$error!!}</p>
    @endforeach

    {!!Form::open(['url' => 'users/'.$id, 'method' => 'PUT'])!!} <!-- Actualizar al /id -->
        <p>
        {!!Form::label('username', 'Nuevo Nombre')!!}
        {!!Form::text('username')!!}
        </p>

        <p>
            {!!Form::submit('Actualizar')!!}
        </p>
    {!!Form::close()!!}

    {!! Html::link('users/'.$id.'/changePassword', 'Cambiar Contraseña') !!}

    <hr>
    {!!Form::open(['url' => 'users/'.$id, 'method' => 'DELETE' ])!!}
        {!!Form::submit('Borrame!')!!}
    {!!Form::close()!!}
    
@stop