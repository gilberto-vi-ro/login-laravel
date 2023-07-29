@section('title', 'Login')

<form action="" method="POST">

    @csrf

    <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    {{-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Recordarme</label>
    </div> --}}
    <br>
    @error('message')
    <div class="alert alert-danger" role="alert">
        * {{ $message }}
    </div>
    @enderror

    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </div>
</form>
