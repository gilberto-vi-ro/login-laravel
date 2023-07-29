<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <!-- Agrega los estilos de Bootstrap 5.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">LoginLaravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Imagen de ejemplo">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido a mi sitio</h5>
                        <p class="card-text">Esta es la página de inicio. Aquí puedes agregar una breve descripción
                            sobre tu sitio o negocio.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Imagen de ejemplo">
                    <div class="card-body">
                        <h5 class="card-title">Nuestros Servicios</h5>
                        <p class="card-text">En esta sección, puedes destacar los servicios que ofreces a tus
                            clientes.</p>
                        <a href="#" class="btn btn-primary">Ver servicios</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contacto</h5>
                        <form>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" rows="3"
                                    placeholder="Escribe tu mensaje aquí"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agrega los scripts de Bootstrap 5.2 y de las dependencias JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
