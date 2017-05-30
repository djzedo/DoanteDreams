<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tu Proyecto Realidad</title>
        
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        
        {!! Html::style('css/table.css') !!}

        <!-- Fonts -->
        
        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <canvas id=c></canvas>
        
        {!! Form::open(['url' => 'Agregar']) !!}
            {!! Form::label('nombre','Nombre del Projecto') !!}
            {!! Form::text('nombre') !!}
            {!! Form::submit('Enviar!') !!}
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
                <td> {!! Form::open(['url'=>'Donar']) !!} 
                        {!! Form::hidden('id', $proyecto->id) !!}
                        {!! Form::selectRange('Donacion',1,20) !!}
                        {!! Form::submit('Donar!') !!}
                     {!! Form::close() !!}
                 </td>
                  
            </tr>
            
        @endforeach
            
        </table>
    <div id="gracias" class="alert alert-success" role="alert"><strong>Gracias!</strong> has donado $ a <a href="#" class="alert-link"> <?php echo $proyecto->nombre; ?> </a>.
    </div>
    
    </body>
</html>
