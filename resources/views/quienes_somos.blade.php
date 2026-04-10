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

<div class="container mt-4">

    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Ozzy</h1>

            <p><b>Nombre:</b> Ozzy remeras</p>
            <p><b>De dónde soy:</b> Chaco, Argentina</p>
            <p><b>Me gustaría trabajar en:</b> El desarollo de software</p>
            <p><b>Expectativas del curso:</b> Poder realizar este proyecto con el fin de aplicarlo en un entorno real cercano</p>
            <p><b>Trabajos de la web:</b> pedidos de estampado, diseño y confeccion de prendas personalizadas</p>

            <a href="#" class="btn btn-primary mt-3">Descargar nuestro catalogo</a>
            <a href="#" class="btn btn-secondary mt-3">Contactar</a>
        </div>
    </div>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>