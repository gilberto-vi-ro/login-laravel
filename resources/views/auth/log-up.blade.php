@section('title', 'Register')

<form action="#" method="POST">

    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    @error('name')
    <div class="alert alert-danger" role="alert">
        * {{ $message }}
    </div>
    @enderror

    <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    @error('email')
    <div class="alert alert-danger" role="alert">
        * {{ $message }}
    </div>
    @enderror

    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    @error('password')
    <div class="alert alert-danger" role="alert">
        * {{ $message }}
    </div>
    @enderror

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
</form>
