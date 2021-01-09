<?php

    // ---------------------------------------------------------------------------------
    // Archivos para la conexión a la base de datos e eliminar datos en esta.
    include '../../../.env.php';
    include '../../../models/conexion.php';
    include '../../../models/process.php';
    include '../../../controllers/controller_proceso.php';
    // ---------------------------------------------------------------------------------

    // ---------------------------------------------------------------------------------
    // Se almacenan los "id" para poder eliminar los registros en la "bd".
    $id_reserva = $_POST['id_reserva'];
    $id_fecha = $_POST['id_fecha'];
    // ---------------------------------------------------------------------------------

    // Parámetros de la función deleteBooking, siendo las dos tablas a eliminar registros.
    $tabla1 = "reserva";
    $tabla2 = "fecha";

    // ---------------------------------------------------------------------------------
    // Se almacena en dos variables, la ejecución de las funciones para eliminar la reserva.
    $DeleteReserva = deleteBooking($tabla1, "id_reserva", $id_reserva);
    $DeleteFecha = deleteBooking($tabla2, "id_fecha", $id_fecha);
    // ---------------------------------------------------------------------------------

    // Se comprueba por medio de la estructura "if" sí ambas funciones se ejecutaron correctamente.
    if ($DeleteReserva && $DeleteFecha) {
        echo '
        <script type="text/javascript"> swal("Estimado/a cliente", "¡Se ha eliminado su reserva!", "success"); </script>
        <div class="alert alert-success">
            <div class="modal-body">
                <div class="jumbotron text-center">
                    <h2 class="disply-4">¡Puede observar otras habitaciones sí gusta!</h2>
                    <hr class="my-4">
                    <p> Su reserva se ha cancelado, puede reservar otra habitación.<br/>
                        <strong>(Para aclaraciones o consultas: guayabahotel@gmail.com)</strong>
                    </p>
                </div>
            <div class="modal-footer">
                <a href="./index.php">
                    <button type="button" id="cerrar" class="btn btn-primary"> <b> Regresar </b> </button>
                </a>
            </div>
            </div>
        </div>';
    }
    else {
        echo '
        <script type="text/javascript"> swal("Estimado cliente", "¡Ha ocurrido un error, inténtelo más tarde!", "error"); </script>
        <div class="alert alert-danger">
            ...Error al cancelar su reserva...
        </div>';
    }

?>