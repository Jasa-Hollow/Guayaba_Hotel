<?php
	session_start();
	include "../../controllers/redirrecionar.php";
	$redic = new Rd();
	$redic->Cliente();
?>

<!DOCTYPE html>
<html lang="en">
    <?php include '../layouts/head.php'; ?>
    <body>
        <?php include './navbar/navbar.php'; ?>
        <div class="container-fluid cap1">
            <!-- ...................................................................................... -->
            <!-- Barra o menú lateral con las diversas opciones -->
            <?php include '../layouts/sidebar.php'; ?> 
            <!-- ...................................................................................... -->

            <!-- ...................................................................................... -->
            <!-- Carrusel con las cards de la habitaciones -->
            <div class="capa_Room"> <?php include '../layouts/carousel.php'; ?> </div>
            <!-- ...................................................................................... -->
        </div>
        <script src="../../public/js/procesos_form.js"></script>
    </body>
</html>