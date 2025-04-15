<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raíces</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/bootstrap/bienesraices/css/footer.css">
</head>
<body>
<header>

<!-- Header -->
<!-- q el hader no se oculte en pantallas pequeñas
<div class="bg-light border-bottom py-2">
<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">  
-->
<!-- Header (solo visible en pantallas grandes) -->
    <div class="bg-light border-bottom py-2 d-none d-md-block">
    <div class="container d-flex justify-content-between align-items-center">
    
        <!-- Nombre de la empresa -->
        <div class="fw-bold">
            SolMar|S.A.C
        </div>

    <!-- Teléfono y correo -->
    <div>
        <i class="fas fa-phone me-2 text-primary"></i>+34 123 456 789
        <span class="mx-3">|</span>
        <i class="fas fa-envelope me-2 text-primary"></i>correo@empresa.com
    </div>

    <!-- Redes sociales -->
    <div>
        <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-dark me-3"><i class="fab fa-x-twitter"></i></a>
        <a href="#" class="text-dark me-3"><i class="fab fa-linkedin-in"></i></a>
    </div>  
    </div>
    </div>

    
<!--nav-->
    <nav class="navbar navbar-expand-lg navbar bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SolMar|S.A.C</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home me-"></i>Inicio</a></li>
            <li class="nav-item"><a class="nav-link active" href="proveedores.php"><i class="fa-solid fa-circle-user"></i>Proveedores</a></li>
            <li class="nav-item"><a class="nav-link active" href="patrocinadores.php"><i class="fa-solid fa-users"></i> Patrocinios</a></li>
            <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-concierge-bell me-1"></i>Servicios
            </a>
            <ul class="dropdown-menu bg-primary">
                <li><a class="dropdown-item active" href="#">Construccion</a></li>
                <li><hr class="dropdown-divider active"></li>
                <li><a class="dropdown-item active" href="#">Carpinteria</a></li>
                <li><hr class="dropdown-divider active"></li>
                <li><a class="dropdown-item active" href="#">Electricidad</a></li>
                <li><hr class="dropdown-divider active"></li>
                <li><a class="dropdown-item active" href="#">Gasfeteria</a></li>
                <li><hr class="dropdown-divider active"></li>
                <li><a class="dropdown-item active" href="#">Electricidad</a></li>
            </ul>
            </li>
            <li class="nav-item"><a class="nav-link active" href="Contacto.php"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
            <li class="nav-item"><a class="nav-link active" href="/bootstrap/bienesraices/User/user.html"><i class="fa-solid fa-key"></i>Acceder</a></li>
            </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        
        </div>
    </div>
    </nav>
</header>

<!-- Contenido principal de la página -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>-->