
@extends('layouts.app')

@section('title', 'Contacto — Ozzy')

@push('styles')
    <link rel="stylesheet" href="{{ asset('CSS/contactanos.css') }}?v=2">
@endpush

@section('content')

{{-- ══ HERO ══ --}}
<section class="contact-hero">
    <div class="container">
        <span class="contact-hero-tag">Ozzy Sublimado</span>
        <h1>¿Hablamos?</h1>
        <p>Consultanos por productos listos o contanos tu idea — la hacemos realidad en remeras, buzos y gorras.</p>
    </div>
</section>

{{--  CARDS DE CONTACTO  --}}
<section class="contact-section">
    <div class="container">

        <span class="section-label">Canales de contacto</span>

        <div class="contact-cards">

            {{-- WhatsApp --}}
            <a class="contact-card" href="https://wa.me/543624032771" target="_blank" rel="noopener">
                <div class="contact-card-icon">
                    <img src="{{ asset('images/icons/whatsapp_icon.png') }}" alt="WhatsApp">
                </div>
                <span class="contact-card-label">Respuesta rápida</span>
                <div class="contact-card-title">WhatsApp</div>
                <p class="contact-card-desc">Escribinos directo. Precios, cantidades, diseños — te respondemos al toque.</p>
                <span class="contact-card-action">Abrir chat →</span>
            </a>

            {{-- Instagram --}}
            <a class="contact-card" href="https://www.instagram.com/ozzy.sw" target="_blank" rel="noopener">
                <div class="contact-card-icon">
                    <img src="{{ asset('images/icons/instagram_icon.png') }}" alt="Instagram">
                </div>
                <span class="contact-card-label">Seguinos</span>
                <div class="contact-card-title">Instagram</div>
                <p class="contact-card-desc">Mirá nuestros trabajos, novedades y productos disponibles en el perfil.</p>
                <span class="contact-card-action">Ver perfil →</span>
            </a>

            {{-- Email --}}
            <a class="contact-card" href="mailto:EMAIL@REEMPLAZARCuandoLoTengaJa.COM">
                <div class="contact-card-icon">
                    <img src="{{ asset('images/icons/correo_icon.png') }}" alt="Email">
                </div>
                <span class="contact-card-label">Consultas formales</span>
                <div class="contact-card-title">Email</div>
                <p class="contact-card-desc">Para pedidos grandes, presupuestos detallados o consultas de empresas.</p>
                <span class="contact-card-action">Enviar mail →</span>
            </a>

        </div>

        {{-- ══ FORMULARIO ══ --}}
        <span class="section-label">Formulario de consulta</span>

        <div class="contact-form-wrap">
            <h2 class="form-title">Contanos tu idea</h2>
            <p class="form-subtitle">Completá el formulario y te contactamos en menos de 24 hs.</p>

            <form action="#" method="POST">
                @csrf
                <div class="form-grid">

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono / WhatsApp</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Ej: 3624 000000">
                    </div>

                    <div class="form-group full">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="tu@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="producto">Producto</label>
                        <select id="producto" name="producto">
                            <option value="">Elegí una opción</option>
                            <option value="remera">Remera</option>
                            <option value="buzo">Buzo</option>
                            <option value="gorra">Gorra</option>
                            <option value="combo">Combo / varios</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="cantidad">Cantidad aproximada</label>
                        <input type="number" id="cantidad" name="cantidad" placeholder="Ej: 10" min="1">
                    </div>

                    <div class="form-group full">
                        <label for="mensaje">Contanos tu idea</label>
                        <textarea id="mensaje" name="mensaje" placeholder="Describí qué querés, colores, talle, si ya tenés diseño..."></textarea>
                    </div>

                </div>

                <div class="form-submit">
                    <span class="form-note">* Te respondemos por email o WhatsApp.</span>
                    <button type="submit" class="btn-ozzy">Enviar consulta</button>
                </div>
            </form>
        </div>

    </div>
</section>

{{-- ══ CTA FINAL ══ --}}
<section class="contact-cta">
    <div class="container">
        <h2>¿Ya tenés tu diseño listo?</h2>
        <p>Mandánoslo por WhatsApp y te damos precio al instante.</p>
        <a href="https://wa.me/543624032771" target="_blank" rel="noopener" class="btn-ozzy-dark">
            Enviar diseño por WhatsApp
        </a>
    </div>
</section>

@endsection


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


