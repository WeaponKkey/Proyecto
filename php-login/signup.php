<?php
  require 'database.php';

  $message = '';

  if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['nacionalidad']) && !empty($_POST['dni']) && !empty($_POST['usuario']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (nombre, apellido, nacionalidad,dni, email, usuario,password) VALUES (:nombre, :apellido, :nacionalidad, :dni, :email, :usuario, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellido', $_POST['apellido']);
    $stmt->bindParam(':nacionalidad', $_POST['nacionalidad']);
    $stmt->bindParam(':dni', $_POST['dni']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con exito';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

  <div class="brand">
          <a href="/proyect/index.php">
            <h1><span>W</span>eapon <span>K</span>key</h1>
          </a>
  </div>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrarse</h1>
    <span>o <a href="login.php">Iniciar sesion</a></span>

    <form action="signup.php" method="POST">
      <input name="nombre" type="text" placeholder="Introduce tu nombre">
      <input name="apellido" type="text" placeholder="Introduce tu apellido">
      <input name="nacionalidad" type="text" placeholder="Introduce de que pais eres">
      <input name="dni" type="text" placeholder="Introduce tu dni">
      <input name="email" type="text" placeholder="Introduce tu email">
      <input name="usuario" type="text" placeholder="Introduce tu nombre de usuario">
      <input name="password" type="password" placeholder="Introduce tu contraseña">
      <input name="confirm_password" type="password" placeholder="Confirme su contraseña">
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
