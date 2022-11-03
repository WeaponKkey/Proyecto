<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, nombre, apellido, nacionalidad, dni, email, usuario, imagen, password FROM users WHERE id = :id');
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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cuenta.css">
  <title>proyecto</title>
</head>

<body>
  <?php
    include 'partes/header.php';
  ?>

<nav class="datos">
<br>
<br>
<br>
<br>

Foto de perfil: <br><br><img src="<?= $user['imagen'];?>" width="200"><br><br>


<form method="POST" action="" enctype="multipart/form-data">
  <input type="file" name="imagen">
  <input type="submit" name="subir" value="subir">
 </form>

<?php
if (isset($_POST['subir'])) {
  $ruta = "fotosperfil/";
  $fichero = $ruta.basename($_FILES['imagen']['name']);
  $rut = $ruta.$_SESSION['user_id'].".jpg";
  if(move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta.$_SESSION['user_id'].".jpg")){
  require("database.php");

  $insertar = $conn->query("UPDATE users SET imagen = '$rut' WHERE id = '".$_SESSION['user_id']."'"); 
  header("Location: cuenta.php?user_id=". $_SESSION['user_id']."");

  }
}
?>

<br>
<br>


<?php if(!empty($user)):?>
    ID: <?= $user['id'];?>
      <br>
    Nombre: <?= $user['nombre'];?>
    <br>
    Apellido: <?= $user['apellido'];?>
    <br>
    Nacionalidad: <?= $user['nacionalidad'];?>
    <br>
    Dni: <?= $user['dni'];?>
    <br>  
    EMAIL: <?= $user['email'];?>
      <br>
    NOMBRE DE USUARIO:  <?= $user['usuario'];?>




      <?php else: ?>
    
    <?php endif; ?>

</nav>


  <script src="./app.js"></script>

  
</body>



</html>