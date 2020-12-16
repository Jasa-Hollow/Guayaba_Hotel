<?php
    /*
        Controlador encargado de mostrar al cliente la habitación reservada,
        e imprimir su estado actual.
    */

    include "../../../models/conexion.php";
    include "../../../models/query.php";
    include "../../../controllers/rooms/structure.php";

    // ------------------------------------------------------------------------------------------------
    // Función para traer la información de las reservas hechas por el usuario.
    function ViewBooking($cliente){
        $consulta = new Query();
        $data = $consulta->queryClientBooking($cliente);
        
        if ($data){
            foreach ($data as $result) {
                // Se obtienen ambos "id" ya que por ellos se eliminarán los registros.
                $id_reserva = $result['id_reserva'];
                $id_fecha = $result['id_fecha'];

                // Datos a imprimir para que el usuario visualice en la vista "clientes".
                $habitacion = $result['tipo'];
                $fecha_inicial = $result['fecha_inicial'];
                $fecha_final = $result['fecha_final'];
                $estado = $result['estado'];

                $img_name = $result['img_room'];
                $imgRoom = '<img class="card-img-top" style="max-width:500px;" src="../../public/img/room/'.$img_name.'" alt="...">';
                
                if ($estado = 1) {
                    $state = "Reservada";
                    // Se llama la función para imprimir la tarjeta con la información de la habitación a reservar.
                    cardBooking($id_reserva, $id_fecha, $habitacion, $imgRoom, $fecha_inicial, $fecha_final, $state);
                }
            }
        }
        else {
            echo ' <script type="text/javascript"> swal("Estimado/a cliente", "Usted no posee reservaciones", "info"); </script>
                <div class="alert alert-success" style="text-align: center;"> 
                    <h3>¡Aquí podrá ver sus reservaciones!</h3><br>
                    <i class="fas fa-swimmer fa-8x"></i><br>
                    <h4>Le invitamos a que siga navegando por nuestro sitio. </h4><br>
                    <a href="./index.php">
                        <button type="button" id="cerrar" class="btn btn-outline-info"> Regresar </button>
                    </a>
                </div>';
        }
    }
    // ------------------------------------------------------------------------------------------------
    

?>