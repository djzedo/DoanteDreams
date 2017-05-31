@extends('layouts.master')

@section('title')
    Registrarse

@section('content')
    {!! Form::open(['url' => 'login' ]) !!}
        <p>
            {!! Form::label('username') !!}
            {!! Form::text('username') !!}
        </p>

        <p>
            {!! Form::label('password') !!}
            {!! Form::password('password') !!}
        </p>

        <p>
            {!! Form::submit('login') !!}
        </p>

    {!! Form::close() !!}

@stop