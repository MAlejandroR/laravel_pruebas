<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>

        <h1>Listado de  {{sizeof($alumnos)}} alumnos</h1>

        @foreach ($alumnos as $nombre)
        <h2>{{$nombre}}</h2>
        @endforeach


    </body>
</html>