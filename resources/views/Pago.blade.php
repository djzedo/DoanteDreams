<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php

        use PayPal\Rest\ApiContext;
        
        require __DIR__ . '/../vendor/autoload.php';
        
        //API
        
        $api = new ApiContext(
        );

        ?>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pago</title>
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Advent+Pro" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        
        {!! Html::style('css/tuProyecto.css') !!}
        <style>
            
        </style>
    </head>
    <body>
        
        <h1>Donar</h1>
        
        
        {!! Form::open(['url' => 'Agregar']) !!}
            
            {!! Form::text('nombre',null,['placeholder'=>'Nombre del Proyecto']) !!}
            {!! Form::submit('Crea Tu Proyecto!') !!}
        {!! Form::close() !!}
        
        <table border="true">
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>
           
             <tr>
                <td> </td> 
                <td> </td> 
                <td> </td>
                  
            </tr>
        </table>
        
    </body>
</html>
