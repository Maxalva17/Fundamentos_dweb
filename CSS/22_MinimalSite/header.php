<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reutilizando elementos de la web semantoca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="#">
</head>
<body>
    <header>
        <!-- Aquí va tu contenido de header, por ejemplo un logo y título -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Mi Sitio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php">Clientes</a>
                    </li>
                    <!-- Agrega más enlaces según sea necesario -->
                </ul>
            </div>
        </nav>
        <main>
        <div class="container mt-5">
            <h1 class="display-4">Bienvenidos a nuestro sitio</h1>
            <p class="lead">Explora nuestros servicios y aprende más sobre lo que ofrecemos. Reutilizamos elementos de la web semántica para una mejor estructura y accesibilidad.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://www.zchocolat.com/img/cms/Payment_Options/buy-luxury-chocolates-with-visa.jpg" class="card-img-top" alt="Imagen de ejemplo">
                        <div class="card-body">
                            <h5 class="card-title">Servicio 1</h5>
                            <p class="card-text">Descripción breve del servicio 1. Puedes modificar esta parte para agregar más detalles.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://www.zchocolat.com/img/cms/Payment_Options/buy-luxury-chocolates-with-visa.jpg" class="card-img-top" alt="Imagen de ejemplo">
                        <div class="card-body">
                            <h5 class="card-title">Servicio 2</h5>
                            <p class="card-text">Descripción breve del servicio 2. Modifica este texto según lo necesites.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://www.zchocolat.com/img/cms/Payment_Options/buy-luxury-chocolates-with-visa.jpg" class="card-img-top" alt="Imagen de ejemplo">
                        <div class="card-body">
                            <h5 class="card-title">Servicio 3</h5>
                            <p class="card-text">Descripción breve del servicio 3. Puedes agregar más detalles aquí también.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </header>