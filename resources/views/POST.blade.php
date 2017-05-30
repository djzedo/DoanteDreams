<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <!-- Styles -->
        <style>
         
        </style>
    </head>
    <body>
        <form action='verify' method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label>
                Username:
            </label>
            <br>
            <input name="username" type="text">
            <br>
            <label>
                Password:
            </label>
            <br>
            <input name="password" type="password">
            <br>
            <input type="submit">
        </form>
    </body>
</html>
