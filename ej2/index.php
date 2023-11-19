<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <title>Formulario de Contacto</title>
</head>

<body class="bg-gray-200">

  <!-- Estructura HTML para el formulario de contacto con Tailwind CSS -->
  <main class="container w-full mx-auto p-4">
    <form id="contactForm" onsubmit="return validateForm()" class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
      <label for="name" class="block mb-2">Nombre:</label>
      <input type="text" id="name" name="name" required class="w-full p-2 mb-4 border rounded-md">

      <label for="email" class="block mb-2">Correo electrónico:</label>
      <input type="email" id="email" name="email" required class="w-full p-2 mb-4 border rounded-md">

      <label for="message" class="block mb-2">Mensaje:</label>
      <textarea id="message" name="message" rows="4" required class="w-full p-2 mb-4 border rounded-md"></textarea>

      <div class="text-red-500 mb-4" id="errorMessage"></div>

      <button type="submit" class="bg-green-500 text-white p-2 rounded-md hover:bg-green-600">Enviar</button>
    </form>
  </main>

  <!-- JavaScript para validar el formulario -->
  <script>
    function validateForm() {
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var message = document.getElementById('message').value;
      var errorMessage = document.getElementById('errorMessage');

      errorMessage.innerHTML = '';

      if (name === '' || email === '' || message === '') {
        errorMessage.innerHTML = 'Por favor, completa todos los campos.';
        return false;
      }

      // Puedes agregar más lógica de validación según tus necesidades, por ejemplo, validar el formato del correo electrónico.

      return true; // Envía el formulario si pasa la validación.
    }
  </script>

</body>

</html>