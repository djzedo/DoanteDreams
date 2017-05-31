<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Donar</title>
        
        <link href="https://fonts.googleapis.com/css?family=Advent+Pro" rel="stylesheet">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
        
        <!-- Styles -->
        
        <style>
            
            
        </style>
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        @if ($message = Session::get('success'))
                        <div class="custom-alerts alert alert-success fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button> 
                            {!! $message !!}
                        </div>
                        <?php Session::forget('success');?>
                        @endif
                        @if ($message = Session::get('error'))
                        <div class="custom-alerts alert alert-danger fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            {!! $message !!}
                        </div>
                        <?php Session::forget('error');?>
                        @endif
                        
                        <div class="panel-heading">Pagar con Paypal a: {!!$nombrePro!!}  <?php if (isset($id)) { $idProyecto = $_GET['id'];} ?>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('addmoney.paypal') !!}" >
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                    <label for="amount" class="col-md-4 control-label">Cantidad</label>
                                    <div class="col-md-6">
                                        <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" autofocus>
                                        <?php
                                        if (isset($idProyecto)){
                                        ?>{!! Form::hidden('idPro', $idProyecto) !!}
                                        <?php }
                                        ?>
                                        @if ($errors->has('amount'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Pagar con Paypal
                                        </button>
                                    </div>
									<form class="form-horizontal" method="GET" id="back-form" role="form" action="/" >
										<button type="submit" class="btn btn-primary">
												Regresar
											</button>
									</form>
                                </div>									
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>