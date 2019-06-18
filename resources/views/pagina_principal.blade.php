<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>

        <h1>Estoy en el página principal</h1>
        <h2>Carlos, ahora sí que es un recurso html</h2>


        <form action="about" method="POST">
            @csrf
            <input type="submit" value="About">
        </form>
        <form action="articulo" method="POST">
            @csrf
            <input type="submit" value="Articulo">
        </form>
        <form action="contacta" method="POST">
            @csrf
            <input type="submit" value="Contacta">
        </form>
        <form action="noticias" method="POST">
            @csrf
            <input type="submit" value="Noticias">
        </form>
    </body>
</html>