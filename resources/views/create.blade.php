@extends('layouts.master')

@section('title')
    Registrarse

@section('content')

    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>

    @endforeach


    {!! Form::open(['url' => 'users', 'method'=>'post' ]) !!}
         <p>
            {!!Form::label('username', 'Usuario*')!!}
            {!!Form::text('username')!!}

        </p>

         <p>
            {!!Form::label('email','email')!!}
            {!!Form::email('email')!!}

        </p>

         <p>
            {!!Form::label('password','Contraseña*')!!}
            {!!Form::password('password')!!}

        </p>

         <p>
            {!!Form::label('password-repeat', 'Repetir-Contraseña*')!!}
            {!!Form::password('password-repeat')!!}

        </p>

        <p>
            {!!Form::label('isAdmin', 'Es Admin?*')!!}
            {!! Form::checkbox('isAdmin', 1, true) !!}

        </p>
         <p>
            {!!Form::submit('Regístrame')!!}

        </p>
    {!!Form::close()!!}

@stop