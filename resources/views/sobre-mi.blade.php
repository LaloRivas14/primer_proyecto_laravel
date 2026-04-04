<!DOCTYPE html>
<html><head>
<link rel="stylesheet"href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<title>Sobre mí</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Ozzy remeras (en proceso)"</a>

        <div class="navbar-nav">
            <a class="nav-link" href="/">Inicio</a>
            <a class="nav-link active" href="/sobre-mi">Sobre Ozzy</a>
            <a class="nav-link" href="/contacto">Contacto</a>
        </div>
    </div>
</nav>
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
{{--  
    <div class="card mot-4">
        <div class="card-body">
            <h2> Formulario de contacto </h2>

            <form>
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="Ingreese su nombre">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Ingrese su email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mensaje</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </form>
        
    </div>
</div>
--}}
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html></html>