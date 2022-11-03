<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, usuario, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
  <div class="brand">
          <a href="">
            <h1><span>W</span>eapon <span>K</span>key</h1>
          </a>
  </div>

    <?php if(!empty($user)): ?>
      <br> Bienvenido <?= $user['usuario'];?>
      


      <br>Has iniciado sesion correctamente
    

      <br>
      <br> Presione este boton si quiere acceder para comprar los productos
      <br> <a href="/Fil/index.php">Compras</a>

      <br>
      <br>
      <br> Presione este boton si quiere acceder a los detalles de su cuenta
      <br> <a href="/usuario/index.php">Cuenta</a>

       <br>
       <br>
     <br> Si quieres cerrar la cuenta presiones el enlace para cerrar se
     <br>
      <a href="logout.php">
        Cerrar sesion
      </a>


      

    <?php else: ?>
      <br> La sesion fue cerrada :C
      <?php endif; ?> 
  </body>
</html>
