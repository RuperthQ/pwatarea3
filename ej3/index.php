<?php
// Inicializar la variable de contador si no existe
session_start();

if (!isset($_SESSION['visitas'])) {
  $_SESSION['visitas'] = 0;
}

// Incrementar el contador en cada visita
$_SESSION['visitas']++;

// Mostrar el número de visitas
$visitas = $_SESSION['visitas'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contador de Visitas</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 50px;
    }
  </style>
</head>

<body>

  <h1>Bienvenido</h1>
  <p>Esta página ha sido visitada <?php echo $visitas; ?> veces.</p>

</body>

</html>