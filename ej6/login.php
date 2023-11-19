<?php
// Conectarse a la base de datos
$dsn = "mysql:host=localhost;dbname=pwa_t3";
$pdo = new PDO($dsn, "root", "");

// Comprobar si se ha enviado el formulario
if (isset($_POST['email']) && isset($_POST['password'])) {
  // Obtener los datos del formulario
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Consulta a la base de datos para verificar el inicio de sesión
  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
  $stmt->bindValue(":email", $email);
  $stmt->execute();
  $user = $stmt->fetch();
  if ($user) {
    // El usuario existe, verifica la contraseña
    if (password_verify($password, $user['password'])) {
      // La contraseña es correcta, inicia sesión y redirige al usuario a la página protegida
      session_start();
      $_SESSION['user'] = $user;
      echo json_encode(array('success' => true));
      // Redirige al usuario a la página de inicio
      // header("Location: ../../../view/pages/home.php");
    } else {
      // La contraseña es incorrecta
      echo json_encode(array('success' => false, 'error' => 'Contraseña incorrecta'));
    }
  } else {
    // El usuario no existe
    echo json_encode(array('success' => false, 'error' => 'Usuario no encontrado'));
  }
}
// Cierra la conexión a la base de datos
$pdo = null;
