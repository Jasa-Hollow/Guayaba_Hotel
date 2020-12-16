<?php
    /* 
        Controlador encargado de almacenar la estructura de las cards
        donde se imprime la información de las habitaciones del hotel.
    */

    // ------------------------------------------------------------------------------------------------
    function printForm($id_habitacion, $id_cliente, $idForm){ // Función para imprimir un formulario dependiendo sí se ha iniciado sesión o no
        if ($_SESSION['usuario']){ // Sí existe, quiere decir que está dentro de las vistas.
            ?>
            <form id="<?php echo $idForm; ?>" method="POST"> <!-- En este caso, por medio de un callback, se define el id del formulario. -->
                <input type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $id_cliente ; /* ID del cliente en sistema. */?>">
                <input type="hidden" name="id_habitacion" id="id_habitacion" value="<?php echo $id_habitacion ; /* ID de la habitación*/?>">
                <button type="submit" class="btn btn-success" data-user="<?php echo $_SESSION['usuario'];?>">Reservar</button>
            </form>
            <?php
        }else{ // Sí no existe, está en el index.
            ?>
            <form method="POST">
                <input type="hidden" name="id_habitacion" value="<?php echo $id_habitacion ; /* ID de la habitación*/?>">
                <button type="submit" class="btn btn-primary reservar">Info</button>
            </form>
            <?php
        }
    }
    // ------------------------------------------------------------------------------------------------

    // ------------------------------------------------------------------------------------------------
    // Función para imprimir las tarjetas en el carrusel.
    function structure($id_habitacion, $id_cliente, $type, $description, $capacity, $img, $idForm)
    {
    ?>
        <div class="card" style="width: 20rem; margin-left: 2em; background-color: #071318;color: white;">
            <div class="card-header" style="text-align: center; background-color: #005115;">
                <h5><?php echo $type; /*Tipo de habitación*/?></h5>
            </div>
            <?php echo $img; /*Imagen almacenada en la carpeta "public"*/?>
            <div class="card-body" style="text-align: center;">
                <p class="card-text">
                    <p><em> <?php echo $description /*Descripción de la habitación*/. " </em><br><br> Capacidad de hospedaje: ". $capacity /*Capacidad de personas*/. " personas."; ?> </p>
                    <?php printForm($id_habitacion, $id_cliente, $idForm) ?>
                </p>
            </div>
        </div>
    <?php
    }
    // ------------------------------------------------------------------------------------------------

    // ------------------------------------------------------------------------------------------------
    // Función para imprimir las tarjetas de las habitaciones por su tipo.
    function structureByType($id_habitacion, $id_cliente, $type, $description, $capacity, $img, $idForm){
    ?>
        <div class="card" style="text-align: center; margin-left: 2em; margin-bottom: 2em; background-color: #071318;color: white;">
            <div class="card-header" style="background-color: #005115;">
                <h5><?php echo $type; /*Tipo de habitación*/?></h5>
            </div>
            <div class="card-body">
                <?php echo $img; /*Imagen almacenada en la carpeta "public"*/?>
                <p class="card-text">
                    <p> <?php echo $description /*Descripción de la habitación*/
                    . "<br> Capacidad de hospedaje: "
                    . $capacity /*Capacidad de personas*/. " personas."; ?> 
                    </p>
                    <?php printForm($id_habitacion, $id_cliente, $idForm) ?>
                </p>
            </div>
        </div>
    <?php
    }
    // ------------------------------------------------------------------------------------------------

    // ------------------------------------------------------------------------------------------------
    // Función para imprimir la tarjeta de habitación en el formulario de pago.
    function cardRoom($type, $description, $capacity, $img){
    ?>
        <div class="card" style="text-align: center; margin-left: 2em; background-color: #071318;color: white;">
            <div class="card-header" style="background-color: #005115;">
                <h5><?php echo $type; /*Tipo de habitación*/?></h5>
            </div>
            <div class="card-body">
                <?php echo $img; /*Imagen almacenada en la carpeta "public"*/?>
                <h5 class="card-text">
                    <p> <?php echo $description /*Descripción de la habitación*/
                    . "<br><br> Capacidad de hospedaje: "
                    . $capacity /*Capacidad de personas*/. " personas."; ?> </p>
                </h5>
            </div>
        </div>
    <?php
    }
    // ------------------------------------------------------------------------------------------------

    // ------------------------------------------------------------------------------------------------
    // Función para imprimir la tarjeta de habitación en la información de reserva.
    function cardBooking($id_reserva, $id_fecha, $habitacion, $imgRoom, $fecha_inicial, $fecha_final, $state) {
        ?>
            <div class="card" style="text-align: center; margin-left: 2em; background-color: #071318;color: white;">
                <div class="card-header" style="background-color: #005115;">
                    <h5>Su habitación reservada: <?php echo $habitacion ; /* Tipo de habitación reservada. */?></h5>
                </div>
                <div class="card-body">
                    <?php
                        echo '<form id="room_cancel'. $id_reserva .'" method="post">' ;
                    ?>
                        <!-- Se almacenan los "id" correspondientes, para luego eliminarlo en caso de que el cliente lo solicite. -->
                        <input type="hidden" name="id_reserva" value="<?php echo $id_reserva ; ?>">
                        <input type="hidden" name="id_fecha" value="<?php echo $id_fecha ; ?>">

                        <?php echo $imgRoom ; /* Impresión de la imagen de la habitación. */ ?>
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Fecha inicial de reserva</h4>
                                <p><?php echo $fecha_inicial ; /* Fecha inicial de la reserva. */?></p>
                            </div>
                            <div class="col-md-6">
                                <h4>Fecha final de reserva</h4>
                                <p><?php echo $fecha_final ; /* Fecha final de la reserva. */?></p>
                            </div>
                        </div>
                        <h5>Estado de Reserva: <?php echo $state ; /* Estado de la reserva. */?></h5>
                        <button type="submit" class="btn btn-danger" name="deleteReserva"> Cancelar Reserva</button>
                    </form>
                </div>
            </div>
            <br>
        <?php
    }
    // ------------------------------------------------------------------------------------------------

    // ------------------------------------------------------------------------------------------------
    //Función para imprimir los botones del carrusel.
    function carouselControl(){
        ?>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        <?php
    }
    // ------------------------------------------------------------------------------------------------
?>