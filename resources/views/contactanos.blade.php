<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <title>OZZY</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--Estilos CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/styles-contact.css') }}">
    <!-- fuente iconos -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>

</head>
<body>
    @include('partials.barra-nav')

<section class ="contact-section">
    <div class="container">

        <span class="section-label" >Canales de contacto</span>

        <div class="contact-cards">

            {{-- Whastapp --}}
            <a class="contact-card" href="https://wa.me/543624032771" target="_blank" rel="noopener">
                <div class="contact-card-icon"><i class="fi fi-brands-whatsapp"></i>
<i class="fi fi-brands-instagram"></i></div>
                <span class="contact-card-label">Respuesta rapida </span>
                <div class="contact-card-title">Whastapp</div>
                <p class ="conctact-card-desc">Escribinos directo. Precios, cantidades, diseños - te respondemos al toque.</p>
                <span class="contact-card-action">Abrir chat -></span>
            </a>



</div>



















{{-- 
<div class="container-contact">
  <div class="card-body">
    <form action="{{ url('/contactanos') }}" method="POST">
      @csrf
      <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="Ingreese su nombre" name="nombre">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Ingrese su email" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mensaje</label>
                    <textarea class="form-control" rows="3" name="mensaje"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
    </form>
  </div>
</div>- --}}

<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

