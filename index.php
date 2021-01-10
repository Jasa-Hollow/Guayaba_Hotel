<?php
	include "./controllers/procesos.php";
	del();
	$_SESSION['usuario'] = false; // Se define cómo falso, ya que no existe en este momento un usuario logueado.
    $_SESSION['tipo'] = false;
?>

<!DOCTYPE html>
<html lang="en">
    <?php include './views/layouts/head.php'; ?>
    <body>
        <?php 
            include './views/index_nav/navbar.php';
            
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
            
            include './views/layouts/banner.php';
        ?>
        <div class="container-fluid " id="contenroom" style="text-align: center;">
            <h2 class="title2">¡Disfruta de las promociones que te ofrece nuestro hotel!</h2><br><br>
            <!-- ...................................................................................... -->
            <!-- Carrusel con las cards de la habitaciones -->
            <div id="cr">
                <?php include './views/layouts/carousel.php'; ?>
            </div>
            <!-- ...................................................................................... -->
        </div>
        <?php include './views/clientes/modal/sesion.php'; ?>
    </body>
</html>