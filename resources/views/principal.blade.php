<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <title>OZZY</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    @include('partials.barra-nav')
    <h1 class="text-center mt-4">Bienvenidos a Ozzy Remeras</h1>

    <div class="container mt-4">
        <ol>
            <li><img class="img" src="{{ asset('images/cap1.png') }}" alt="Primera imagen">
            <h3 class="text-right mt-4">¿Quiénes somos?</h3></li>
            




            <li><img class="img" src="{{ asset('images/cap2.png') }}" alt="Segunda imagen"></li>
            <li><img class="img" src="{{ asset('images/cap3.png') }}" alt="Tercera imagen"></li>
        </ol>
    </div>

    <!-- Bootstrap JS + dependencias -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>