<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Responsive</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/bootstrap/bienesraices/css/slider.css">
</head>
<body>
<!-- Sección Carousel -->
<section class="container-fluid p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="https://static.vecteezy.com/system/resources/previews/000/677/302/non_2x/abstract-technology-banner-background.jpg" class="d-block w-100" alt="Imagen 1">
                <div class="carousel-caption text-center">
                    <h5>Bienvenido a nuestro sitio</h5>
                    <p>Este es un ejemplo de carousel elegante y moderno usando Bootstrap 5.</p>
                    <a href="#seccion" class="btn-custom">Ir a la sección</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="https://static.vecteezy.com/system/resources/previews/000/677/302/non_2x/abstract-technology-banner-background.jpg" class="d-block w-100" alt="Imagen 2">
                <div class="carousel-caption text-center">
                    <h5>Explora nuestros productos</h5>
                    <p>Descubre todo lo que tenemos para ti en nuestra tienda online.</p>
                    <a href="https://www.ferrari.com/es-ES" target="_blank" class="btn-custom">Ver más</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="https://static.vecteezy.com/system/resources/previews/000/677/302/non_2x/abstract-technology-banner-background.jpg" class="d-block w-100" alt="Imagen 3">
                <div class="carousel-caption text-center">
                    <h5>Ofertas exclusivas</h5>
                    <p>No te pierdas nuestras promociones y descuentos especiales.</p>
                    <a href="#seccion" class="btn-custom">Aprovecha ahora</a>
                </div>
            </div>

        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</section>



</body>
</html>