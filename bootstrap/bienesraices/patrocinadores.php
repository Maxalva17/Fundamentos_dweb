<?php include 'includes/header.php'; ?>

<?php

// Datos de patrocinadores (puedes reemplazar esto por base de datos más tarde)

$patrocinadores = [

  [

    'nombre' => 'Banco XYZ',

    'logo' => 'https://is1-ssl.mzstatic.com/image/thumb/Purple211/v4/eb/fb/91/ebfb91ca-0504-4ea9-f1d3-d55474d1bc35/AppIcon-0-0-1x_U007emarketing-0-5-0-85-220.png/1200x630wa.png',

    'web' => 'https://bancoxyz.com'

  ],

  [

    'nombre' => 'Constructora ABC',

    'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZVG6SjbkG1ryhm30-GP4a8tq1xKM2ZZpEWg&s',

    'web' => 'https://constructoraabc.com'

  ],

  [

    'nombre' => 'Grupo Seguros',

    'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMeLVzgo_-bXG1FUhIoIPu8DCwt-OcYAxrlQ&s',

    'web' => 'https://gruposeguros.com'

  ],

  [

    'nombre' => 'Marketing Pro',

    'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzrnovMrMwf3w4rQChmMKPOGBI4xbCrEsgPQ&s',

    'web' => 'https://marketingpro.com'

  ],

];

?>



<!DOCTYPE html>

<html lang="es">

<head>

 <meta charset="UTF-8">

 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>Patrocinadores | Inmobiliaria Éxito</title>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

 

 <style>

  /* Estilos personalizados para la sección de patrocinadores */

  .patrocinadores-section {

   background-color: #f8f9fa;

   padding: 50px 0;

   text-align: center;

  }

  .patrocinadores-section h2 {

   font-size: 2.5rem;

   color: #333;

   margin-bottom: 30px;

   font-weight: bold;

  }

  .patrocinador-item {

   padding: 15px;

   background-color: white;

   border-radius: 10px;

   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

   transition: transform 0.3s, box-shadow 0.3s;

  }

  .patrocinador-item:hover {

   transform: translateY(-10px);

   box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);

  }

  .patrocinador-item img {

   max-height: 100px;

   object-fit: contain;

   margin-bottom: 15px;

  }

  .patrocinador-item p {

   font-size: 1rem;

   font-weight: 500;

   color: #333;

  }

  .row {

   display: flex;

   justify-content: center;

   gap: 30px;

  }

  /* Responsive: Centrado en dispositivos móviles */

  @media (max-width: 768px) {

   .row {

    flex-direction: column;

    align-items: center;

   }

  }

 </style>

</head>

<body>



<!-- Sección de Patrocinadores -->

<section class="patrocinadores-section">

 <div class="container">

  <h2>Nuestros Patrocinadores</h2>

  <div class="row">

   <?php foreach ($patrocinadores as $patro): ?>

    <div class="col-6 col-md-4 col-lg-3">

     <div class="patrocinador-item">

      <a href="<?= $patro['web']; ?>" target="_blank" class="text-decoration-none">

       <img src="<?= $patro['logo']; ?>" alt="<?= $patro['nombre']; ?>" class="img-fluid">

       <p><?= $patro['nombre']; ?></p>

      </a>

     </div>

    </div>

   <?php endforeach; ?>

  </div>

 </div>

</section>

<?php include 'includes/footer.php'; ?>