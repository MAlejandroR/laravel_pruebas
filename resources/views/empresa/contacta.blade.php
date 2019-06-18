@extends("layout")

@section("menu_superior")
<a  href="about_empresa">About</a>
<a style="color:red" href="contacta_empresa">Contacta</a>
<a href="noticias_empresa">Noticas</a>

@stop

@section('contenido_central')
<h2>Esta es la sección de contacta</h2>
<form action="action">
    @csfr
    Nombre <input type="text" name="" id="">
    correo <input type="text" name="" id="">
    Información <input type="text" name="" id="">

</form>

@stop

@section('contenido_torcido')
<h3>Opciones de contacta</h3>

@stop