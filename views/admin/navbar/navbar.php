<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #42931F;color:#fff;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span style="color:#fff;"><i class="fas fa-cogs"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto" >
      <div class="d-none d-sm-none d-md-block">
        <li class="nav-item active" style="text-align: center;">
          <a class="nav-link" href="./index.php" style="color:#fff;"><i class="fas fa-home fa-2x"></i> Inicio<span class="sr-only">(current)</span></a>
        </li>
      </div>
  
      <div class="d-block d-sm-block d-md-none">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php" style="color:#fff;"><i class="fas fa-home fa-2x"></i> Inicio<span class="sr-only">(current)</span></a>
        </li>
      </div>
      
      <!--<div class="d-none d-sm-none d-md-block">
        <li class="nav-item active" style="text-align: center;">
          <a class="nav-link" href="./index.php" style="color:#fff;"><i class="fas fa-allergies fa-2x"></i> Ayuda<span class="sr-only">(current)</span></a>
        </li>
      </div>-->
      
      <div class="d-none d-sm-none d-md-block">
        <li class="nav-item active" style="text-align: center;">
          <a class="nav-link" href="#" id="lista-clientesA" style="color:#fff;"><i class="fas fa-users fa-2x"></i> Clientes<span class="sr-only">(current)</span></a>
        </li>
      </div>
      
      <div class="d-block d-sm-block d-md-none">
        <li class="nav-item active">
          <a class="nav-link" href="#" id="lista-clientesB" style="color:#fff;"><i class="fas fa-users fa-2x"></i> Clientes<span class="sr-only">(current)</span></a>
        </li>
      </div>
      
      <div class="d-none d-sm-none d-md-block">
        <li class="nav-item active" style="text-align: center;">
          <a class="nav-link" href="#" id="graficosA" style="color:#fff;"><i class="fas fa-chart-bar fa-2x"></i> Graficos<span class="sr-only">(current)</span></a>
        </li>
      </div>
      
      <div class="d-block d-sm-block d-md-none">
        <li class="nav-item active">
          <a class="nav-link" href="#" id="graficosB" style="color:#fff;"><i class="fas fa-chart-bar fa-2x"></i>Graficos<span class="sr-only">(current)</span></a>
        </li>
      </div>

      <div class="d-none d-sm-none d-md-block">
        <li class="nav-item active" style="text-align: center;">
          <a class="nav-link" href="#" id="reservasA" style="color:#fff;"><i class="fas fa-hotel fa-2x"></i> Reservas<span class="sr-only">(current)</span></a>
        </li>
      </div>
      
      <div class="d-block d-sm-block d-md-none">
        <li class="nav-item active">
          <a class="nav-link" href="#" id="reservasB" style="color:#fff;"><i class="fas fa-hotel fa-2x"></i> Reservas<span class="sr-only">(current)</span></a>
        </li>
      </div>
      <!--li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li -->
    </ul>
    <div class="col-md-3">
        <div class="alert alert-primary">
          <i class="fas fa-user"></i> Bienvenido/a: <?php echo $_SESSION["usuario"]; ?>
        </div>
    </div>
     <div class="d-none d-sm-none d-md-block">
      <form action="../../controllers/controller_login.php" method="POST">
        <button class="btn" style="color:#fff;">
            <i class="fas fa-arrow-right fa-2x"> Salir</i>
        </button>
      </form>
    </div>
    <div class="d-block d-sm-block d-md-none">
      <form action="../../controllers/controller_login.php" method="POST">
        <button class="btn" style="color:#fff;">
          <i class="fas fa-arrow-right fa-2x">Salir</i>
        </button>
      </form>
    </div>
    
  </div>
</nav>