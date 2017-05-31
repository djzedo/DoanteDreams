
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DonateDreams</title>     
		
		<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">		
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
        
		{!! Html::style('css/tuProyecto.css') !!}
        <style></style>
    </head>
    <body>
		{!! HTML::image('img/tuProyecto.jpg' , 'Tu Proyecto', ['class' => 'imagenjumbo']) !!}
        
        <div class="title m-b-md"><h1>Donate Dreams</h1></div>
        
        
        {!! Form::open(['url' => 'Agregar']) !!}            
            {!! Form::text('nombre',null,['placeholder'=>'Nombre del Proyecto']) !!}
            {!! Form::submit('Crea Tu Proyecto!') !!}
        {!! Form::close() !!}
        
		<br>
        <table border="true" class="table">
            <tr>
                <th>Nombre Proyecto</th>
                <th>Cantidad</th>
                <th>Donar</th>
            </tr>
           
        @foreach($proyectos as $proyecto)
             <tr>
				<td><a href="<?php echo url('detail') ?>">{!! $proyecto->nombre !!}
				</a> </td>
                <td> ($ {!! $proyecto->cantidad !!}) </td> 
                <td> {!! Form::open(['url'=>'paywithpaypal', 'method'=>'get']) !!} 
                        {!! Form::hidden('id', $proyecto->id) !!}
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