  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.php">
            <h1><span>W</span>eapon <span>K</span>key</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>

          <ul>
            <li><a href="cuenta.php" data-after="cuenta">
            <?php if(!empty($user)):?>
            <?= $user['usuario'];?>
            
            <li><a href="../Fil/index.php" data-after="Catalogo">Catalogo</a></li>

            <li><a href="../php-login/logout.php" data-after="Cerrar sesion">Cerrar sesion</a></li>

            </a></li>
            <?php else: ?>
    
            <?php endif; ?>
        </ul>
        
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->