<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <title>Menu desplegable</title>
</head>

<body class="bg-gray-200">

  <!-- Estructura HTML para el menú desplegable con Tailwind CSS -->
  <main class="container mx-auto p-4">
    <ul class="flex space-x-4 bg-gray-800 text-white p-2">
      <li class="relative" onclick="toggleSubMenu('submenu1')">
        <span class="cursor-pointer">Inicio</span>
        <ul class="submenu hidden absolute left-0 top-full bg-gray-700 p-2" id="submenu1">
          <li>Subitem 1</li>
          <li>Subitem 2</li>
          <li>Subitem 3</li>
        </ul>
      </li>
      <li class="relative" onclick="toggleSubMenu('submenu2')">
        <span class="cursor-pointer">Servicios</span>
        <ul class="submenu hidden absolute left-0 top-full bg-gray-700 p-2" id="submenu2">
          <li>Subitem 1</li>
          <li>Subitem 2</li>
          <li>Subitem 3</li>
        </ul>
      </li>
      <li class="relative" onclick="toggleSubMenu('submenu3')">
        <span class="cursor-pointer">Acerca de</span>
        <ul class="submenu hidden absolute left-0 top-full bg-gray-700 p-2" id="submenu3">
          <li>Subitem 1</li>
          <li>Subitem 2</li>
          <li>Subitem 3</li>
        </ul>
      </li>
    </ul>
  </main>

  <!-- JavaScript para manejar la visibilidad del submenú -->
  <script>
    function toggleSubMenu(submenuId) {
      var submenu = document.getElementById(submenuId);
      submenu.classList.toggle("hidden");
    }
  </script>

</body>

</html>