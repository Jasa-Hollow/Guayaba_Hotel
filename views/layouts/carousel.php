<?php
if ($_SESSION['usuario']) { // Sí existe, quiere decir que está dentro de las vistas.
    include '../../controllers/rooms/structure.php';
    include '../../controllers/rooms/print_room.php';
} else { // Sí no existe, está en el index, por lo tanto, se cambia la dirección.
    include './controllers/rooms/structure.php';
    include './controllers/rooms/print_room.php';
}
?>

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