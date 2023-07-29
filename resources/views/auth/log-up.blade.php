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
        <input type="password" class="form-control" id="password" name="password" onkeyup="verifypassword()"  required>
    </div>
    @error('password')
    <div class="alert alert-danger" role="alert">
        * {{ $message }}
    </div>
    @enderror

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" onkeyup="verifypassword()" required>
    </div>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            * {{ session('success') }}
        </div>
    @endif

    <div class="d-grid">
        <button id="btn_up" type="submit" class="btn btn-primary" >Registrarse</button>
    </div>
</form>

<script>
    function verifypassword(){
        if ( password.value == password_confirmation.value){
            password.style.border = '1px solid #ccc';
            password_confirmation.style.border = '1px solid #ccc';
            btn_up.style.cursor = 'pointer';
            btn_up.disabled = false;


        }else{
            password.style.border = '2px solid red';
            password_confirmation.style.border = '2px solid red';
            btn_up.style.cursor = 'no-drop';
            btn_up.disabled = true;
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Ocultar el mensaje de error después de 3 segundos
        setTimeout(function() {
            var errorMessages = document.querySelectorAll('.alert-danger');
            if (errorMessages) {
                errorMessages.forEach(function(message) {
                    message.style.display = 'none';
                });
            }
        }, 4000); // 3000 milisegundos = 3 segundos
    });

</script>
