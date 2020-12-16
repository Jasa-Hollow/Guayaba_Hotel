<?php
	session_start();

	include "../../controllers/redirrecionar.php";

	$redic = new Rd();

	$redic->Cliente();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<title>Portal del Cliente</title>
        <link rel="icon" type="image/png" href="../../public/img/icon/hotel_logo.png">
        
		<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../public/css/estilo.css">
        <link rel="stylesheet" href="../../public/css/styl.css">
        <!--JS -->
		<script src="../../public/js/jquery-3.5.1.slim.min.js"></script>
        <script src="../../public/js/jquery-1.9.1.min.js"></script>
        <script src="../../public/js/bootstrap.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>

        <!-- Estilo para las alertas, librería. -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		
		<script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
		
		<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Oswald&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php 
            include './navbar/navbar.php';
            include '../../controllers/rooms/structure.php';
            include '../../controllers/rooms/print_room.php';
        ?>
        <div class="container-fluid cap1">
            <!-- ...................................................................................... -->
            <!-- Barra o menú lateral con las diversas opciones -->
            <div class="font-barra">
                <div id="barra">
                    <h2>GUAYABA HOTEL</h2>
                    <li>
                        <button class="mover" id="view1" type="button">
                            Personal <i class="fas fa-person-booth">
                            </i>
                        </button>
                    </li>
                    <li>
                        <button class="mover" id="view2" type="button">
                            Familiar <i class="fas fa-users">
                            </i>
                        </button>
                    </li>
                    <li>
                        <button class="mover" id="view3" type="button">
                            Doble <i class="fas fa-user-friends">
                            </i>
                        </button>
                    </li>
                    <li>
                        <button class="mover" id="view4" type="button">
                            Cinco estrellas <i class="fas fa-bahai">
                            </i>
                        </button>
                    </li>
                    <li>
                        <button class="mover" id="view5" type="button">
                            Presidencial <i class="fas fa-user-tie">
                            </i>
                        </button>
                    </li>
                </div>
            </div>
            <!-- ...................................................................................... -->

            <!-- ...................................................................................... -->
            <!-- Carrusel con las cards de la habitaciones -->
            <div class="capa_Room">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php ShowRooms(); ?>
                    </div>
                    <?php carouselControl(); ?>
                </div>
            </div>
            <!-- ...................................................................................... -->
        </div>
        <script src="../../public/js/procesos_form.js"></script>
    </body>
</html>