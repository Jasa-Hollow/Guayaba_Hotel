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
		<link rel="icon" type="image/png" href="../../public/img/icon/hotel_logo.png">
		<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
  		<link rel="stylesheet" href="../../public/css/estilo.css">
  		<link rel="stylesheet" href="../../public/css/styl.css">
  		<!--JS -->
		<script src="../../public/js/jquery-3.5.1.slim.min.js"></script>
		<script src="../../public/js/jquery-1.9.1.min.js"></script>
		<script src="../../public/js/bootstrap.min.js"></script>

		<!-- Estilo para las alertas, librería. -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		
		<script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include './navbar/navbar.php'?>
    <section class="banner">
        <div class="banner-content" id="capa">
			<div class="cap">
				<div class="container-fluid"><br>
					<div class="row">
						<div class="col-md-12">
							<div class="card" style="background-color: #212121;color: white;">
								<h5 class="card-header">Administración</h5>
							</div>
							<div class="card-body" style="background-color:rgb(74, 175, 74);">
								<div id="capa">
									<div class="row">
										<div class="col-md-6" id="clientes">
											<a href="#" id="conten-cliente" class="btn"><img src="../../public/img/clientes.png"
												width="190px" alt=""><br><b>Clientes</b></a>
										</div>
										<div class="clase2 col-md-6">
											<a href="#" id="conten-graficos" class="btn"><img src="../../public/img/graficos.png"
												width="190px" alt=""><br><b>Gráficos</b></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <script src="../../public/js/js_funciones.js"></script>
</body>
</html>