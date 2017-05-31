@extends('layouts.master')

@section('title')
    Donate Dreams - Login Page
@stop
        
    
@section('content')
        <div class="flex-center position-ref full-height" style="background-image: url("img/fondo.jpg")">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <strong>Donate Dreams</strong>
                </div>
                
                
                <div class="login">
                    <br><br><br>
    
                    <h1><span style="font-family: 'Open Sans', sans-serif;">Login</span></h1>
                    {!! Form::open(['url' => 'login']) !!}
                    <p>
                        {!! Form::label('') !!}
                        {!! Form::text('username', null, ['placeholder' => 'tu usuario']) !!}
                    
                        {!! Form::label('') !!}
                        {!! Form::password('password', ['placeholder' => 'tu contraseña']) !!}
                    
                        {!! Form::submit('Déjame Entrar!', array('class' => 'btn btn-primary btn-block btn-large')) !!}
                    </p>

                    {!! Form::close() !!}
                </div>
                    
                <div class="links">
                    <a href=" https://youtu.be/bdBDApNJsZY">VideoDemo</a>
                    <a href="https://github.com/djzedo/DoanteDreams">GitHub</a>
                </div>
            </div>
        </div>
@stop
