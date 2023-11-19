<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Galeria de imagenes</title>
</head>

<body class="bg-black">
  <main class="container mx-auto p-8">
    <h1 class="text-center text-white font-bold text-3xl">Galeria de imagenes</h1>
    <figure class="flex flex-row justify-center py-16">
      <?php
      $dir = './img'; //Directorio de imagenes
      $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif']; // Extensiones permitidas

      $imagenes = glob($dir . '/*.{' . implode(',', $allowedExtensions) . '}', GLOB_BRACE);

      foreach ($imagenes as $imagen) {
        echo '<img src="' . $imagen . '" alt="Imagen" class="h-80 w-56 mx-4 hover:text-cyan-500 hover:shadow-xl hover:shadow-cyan-500/50">';
      }
      ?>
    </figure>
  </main>
</body>

</html>