
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

<div class="card mt-4">
  <div class="card-body">
    <form action="{{ url('/contacto') }}" method="POST">
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
</div>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

