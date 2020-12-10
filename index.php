<?php
	include "./controllers/procesos.php";
	del();
	$_SESSION['usuario'] = false; // Se define cómo falso, ya que no existe en este momento un usuario logueado.
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Reservas Guayaba Hotel</title>
        <link rel="icon" type="image/png" href="./public/img/icon/hotel_logo.png">
        <link rel="stylesheet" href="./public/css/bootstrap.min.css">
        <link rel="stylesheet" href="./public/css/estilo.css">
        <!--JS -->
        <script src="./public/js/jquery-3.5.1.slim.min.js"></script>
        <script src="./public/js/jquery-1.9.1.min.js"></script>
        <script src="./public/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./public/css/styl.css">

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>
        
        <!-- Estilo para las alertas, librería. -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Oswald&display=swap" rel="stylesheet">

        <script src="./public/js/js_funciones.js"></script>
    </head>
    <body>
        <?php 
            include './views/index_nav/navbar.php';
            include './controllers/rooms/structure.php';
            include './controllers/rooms/print_room.php';

            if(isset($_GET['mensaje'])) {
                $mensaje = base64_decode($_GET['mensaje']);
                if ($mensaje = "La contraseña es incorrecta") {
                    echo '<script type="text/javascript"> 
                            swal("Estimado usuario, la contraseña es incorrecta", "Ingrese de nuevo la contraseña por favor", "error"); 
                        </script>';
                }
                elseif ($mensaje = "El usuario no tiene permisos de acceso") {
                    echo '<script type="text/javascript"> 
                            swal("Estimado usuario", "El usuario no tiene permisos de acceso", "error"); 
                        </script>';
                }
            }
        ?>
        <section class="banner">
            <div class="banner-content" id="capa">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1 class="tittle">Guayaba Hotel</h1>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="container-fluid " id="contenroom">
            <h2 style="text-align: center; color:white;">¡Disfruta de las promociones que te ofrece nuestro hotel!</h2><br><br>
            <!-- ...................................................................................... -->
            <!-- Carrusel con las cards de la habitaciones -->
            <div class="" id="cr">
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
        <?php  
            include './views/clientes/modal/sesion.php';
        ?>
        
    </body>
</html>