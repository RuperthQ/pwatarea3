<?php
session_start();

if (!isset($_SESSION['answer'])) {
  $_SESSION['answer'] = rand(1, 10);
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userGuess = filter_input(INPUT_POST, 'guess', FILTER_VALIDATE_INT);

  if ($userGuess !== false && $userGuess >= 1 && $userGuess <= 10) {
    if ($userGuess == $_SESSION['answer']) {
      $message = '¡Felicidades! Has adivinado el número correctamente.';
      unset($_SESSION['answer']);
    } else {
      $message = 'Intenta de nuevo. ¡No has adivinado el número!';
      // $message .= ' El número correcto era ' . $_SESSION['answer'] . '.';
    }
  } else {
    $message = 'Por favor, ingresa un número válido entre 1 y 10.';
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Juego de Adivinanzas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-200">

  <main class="container mx-auto text-center p-4">
    <h1 class="text-3xl font-bold mb-4">Juego de Adivinanzas</h1>
    <p>Estoy pensando en un número entre 1 y 10. ¿Puedes adivinar cuál es?</p>

    <form method="post" action="" class="mt-4">
      <label for="guess" class="block mb-2">Tu suposición:</label>
      <input type="number" id="guess" name="guess" min="1" max="10" required class="w-1/2 p-2 border rounded-md">
      <button type="submit" class="bg-blue-500 text-white p-2 rounded-md ml-2">Adivinar</button>
    </form>

    <p class="mt-4 text-red-500"><?= $message ?></p>
  </main>

</body>

</html>