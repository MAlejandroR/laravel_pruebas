<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/estilo.css" type="text/css"/>
    </head>
    <body>
        <header>
            <img src="img/logo.png" alt="No found">
            <h1 class="titulo">EMPRESA DE ANIMALITOS BONITOS</h1>
        </header>
        <nav class='superior'>
            @yield("menu_superior")
        </nav>
        <div class='central'>
            @yield('contenido_central')
        </div>

        <div class='derecha'>
            @yield('contenido_torcido')
        </div>
        <footer>
            Sección desarrollada por certificado nivel 3
        </footer>



    </body>
</html>