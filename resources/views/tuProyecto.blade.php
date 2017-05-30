<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DonateDreams</title>
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Advent+Pro" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        
        {!! Html::style('css/tuProyecto.css') !!}
        <style>
            
        </style>
    </head>
    <body>
        {!! HTML::image('img/tuProyecto.jpg' , 'Tu Proyecto', ['class' => 'imagenjumbo']) !!}
        
        <h1>Donate Dreams</h1>
        @if(Auth::check())
        Bienvenido: {!!Auth::user()->username!!}. ( {!! Html::link('logout', 'Salir') !!} )
        ({!! Html::link('users/', 'perfil') !!})
    @endif
        
        {!! Form::open(['url' => 'Agregar']) !!}
            
            {!! Form::text('nombre',null,['placeholder'=>'Nombre del Proyecto']) !!}
            {!! Form::submit('Crea Tu Proyecto!') !!}
        {!! Form::close() !!}
        
        <table border="true">
            <tr>
                <th>Nombre Proyecto</th>
                <th>Cantidad</th>
                <th>Donar</th>
            </tr>
           
        @foreach($proyectos as $proyecto)
             <tr>
                <td> {!! $proyecto->nombre !!} </td> 
                <td> ($ {!! $proyecto->cantidad !!}) </td> 
                <td> {!! Form::open(['url'=>'paywithpaypal', 'method'=>'get']) !!} 
                        {!! Form::hidden('id', $proyecto->id) !!}
                        <!-- {!! Form::selectRange('Donacion',1,20) !!} -->
                        {!! Form::submit('Donar!') !!}
                     {!! Form::close() !!}
                 </td>
                  
            </tr>
            
        @endforeach
            
        </table>
        
    <div class="alert alert-danger" role="alert" style="display:{{$display}}">
    <strong>Oh Lo Sentimos!</strong> El nombre del proyecto que escogiste ya existe, por favor intentalo de nuevo.
    </div>
        
    <div id="gracias" class="alert alert-success" role="alert" style="display:{{$display}}"><strong>Gracias!</strong> has donado $ a <a href="#" class="alert-link"></a>.
    </div>    
        
    </body>
</html>
