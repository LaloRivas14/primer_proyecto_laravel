<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <title>OZZY</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    @include('partials.barra-nav')
@if (isset($nombre) && isset($email))
    <div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">¡Éxito!</h4>
        <p>
            Recibimos tu mensaje <strong>{{$nombre}}</strong>. Un asesor comercial se comunicará contigo a la
            brevedad a traves del correo electrónico: <strong>{{$email}}</strong>. ¡Muchas gracias!</p>
        <a class="btn btn-primary mt-3" href="/sobre-mi">Volver</a>
    </div>
</div>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
@else
    <div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">¡Éxito!</h4>
        <p>
            Debe de volver a completar el formulario pues no a introducido todos los datos.</p>
        <a class="btn btn-primary mt-3" href="/sobre-mi">Volver</a>
    </div>
</div>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
@endif
