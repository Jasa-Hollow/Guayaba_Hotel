<?php
    session_start();

	include "../../controllers/redirrecionar.php";

	$redic = new Rd();

	$redic->Admin();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<title>Administración</title>
		<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
  		<link rel="stylesheet" href="../../public/css/estilo.css">
  		<link rel="stylesheet" href="../../public/css/styl.css">
  		<!--JS -->
		<script src="../../public/js/jquery-3.5.1.slim.min.js"></script>
		<script src="../../public/js/jquery-1.9.1.min.js"></script>
		<script src="../../public/js/bootstrap.min.js"></script>
		<script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include './navbar/navbar.php'?>
    
    <div class="cap">
        <div class="container-fluid"><br>
		<div class="row">
			<div class="col-md-12">
				<div class="card" style="background-color: #212121;color: white;">
					<center>
						<h5 class="card-header">Administración</h5>
					</center>
				</div>
				<div class="card-body" style="background-color:rgb(74, 175, 74);">
					<div id="capa">
						<center>
						<div class="row">
						     
							<div class="col-md-6" id="clientes">
								<a href="#" id="lista-clientes" class="btn"><img src="../../public/img/clientes.png"
										width="190px" alt=""><br><b>Clientes</b></a>
							</div>
							<div class="clase2 col-md-6">
								<a href="./graficos/principal.php" class="btn"><img src="../../public/img/graficos.png"
										width="190px" alt=""><br><b>Gráficos</b></a>
							</div>
						</div>
						</center>
					</div>
				</div><br><br>
			</div>
		</div>
		<br><br>
	</div>
        
    </div>
    <script src="../../public/js/js_funciones.js"></script>
</body>
</html>