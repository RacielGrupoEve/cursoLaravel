<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Título - @yield('titulos')</title>
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">

</head>
<body>
@section('header')
Cabecera de la web (master)
@show
<div class="container">
    @yield('content')
</div>
@section('footer')
    Pie de pagina de la web (master)
@show
</body>
</html>
