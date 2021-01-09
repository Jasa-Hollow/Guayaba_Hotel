<!-- Archivo para registrar las reservas de las habitaciones. -->
<?php 
    session_start();
	include "../../../controllers/redirrecionar.php";
	$redic = new Rd();
    $redic->Cliente();
    
    // ---------------------------------------------------------------------------------
    // Archivos para la conexión a la base de datos e insertar datos en esta.
    include '../../../.env.php';
    include '../../../models/conexion.php';
    include '../../../models/query.php';
    include '../../../controllers/controller_proceso.php';
    // ---------------------------------------------------------------------------------

    date_default_timezone_set('America/El_Salvador');
    $user = $_SESSION['usuario'];

    // ---------------------------------------------------------------------------------
    //  Datos de los campos, que se obtienen por el método POST

        $id_cliente = $_POST['id_cliente'];
        $id_fecha = $_POST['id_fecha'];
        $id_habitacion = $_POST['id_habitacion'];
        $fechaEntrada = $_POST['fechaEntrada'];
        $fechaSalida = $_POST['fechaSalida'];
        $id_pago = $_POST['id_pago'];
        $Ncuenta = password_hash($_POST['Ncuenta'],PASSWORD_DEFAULT);
    // ---------------------------------------------------------------------------------

    // Parámetros de la función insertUser, siendo las dos tablas a agregar datos.
        $tabla1 = "fecha";
        $tabla2 = "reserva";

    // Parámetros de la función insertUser, siendo los campos de cada una de las tablas.
        $campos1 = "id_fecha, fecha_inicial, fecha_final, fecha_cancelacion";
        $campos2 = "id_reserva, Ncuenta, id_cliente, id_pago, id_habitacion, id_fecha, estado";

    // Parámetros de la función insertUser, siendo el valor almacenado en las variables, y los que se insertarán en los campos.
        $valores1 = "'$id_fecha','$fechaEntrada','$fechaSalida','NULL'";
        $valores2 = "'NULL','$Ncuenta','$id_cliente','$id_pago','$id_habitacion','$id_fecha', 1";

    // ---------------------------------------------------------------------------------
    // Se ejecuta la función para insertar en la tabla "fecha" y la tabla "reserva".
        $InsertFecha = InsertUser($tabla1, $campos1, $valores1);
        $InsertReserva = InsertUser($tabla2, $campos2, $valores2);
    // ---------------------------------------------------------------------------------

    if ($InsertFecha AND $InsertReserva) {
        echo '
        <script type="text/javascript"> swal("Estimado cliente: '. $user .'", "¡Se ha reservado la habitación!", "success"); </script>
        <div class="alert alert-success">
            <div class="modal-body">
                <div class="jumbotron text-center">
                    <h2 class="disply-4">¡Gracias por su reservar con nosotros!</h2>
                    <hr class="my-4">
                    <p>La información de la reserva se ha registrado, puede cancelar la habitación sí lo desea antes de la fecha inicial de su estadía.<br/>
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
        <script type="text/javascript"> swal("Estimado cliente: '. $user .'", "¡Ha ocurrido un error, inténtelo más tarde!", "error"); </script>
        <div class="alert alert-danger">...Error al registrar su información...</div>';
    }
?>