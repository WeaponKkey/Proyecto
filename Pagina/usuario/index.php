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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>proyecto</title>
</head>

<body>
  <?php
    include 'partes/header.php';
  ?>

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Bienvenido, <span></span></h1>
        <span></span>        <h1> <?= $user['usuario'];?> <span></span></h1>
       
        <a href="#projects" type="button" class="cta">Mas...</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->
  <script src="./app.js"></script>

  
  </body>
</html>