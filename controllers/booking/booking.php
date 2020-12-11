<?php
    /*
        Controlador encargado de mostrar al cliente la habitación reservada,
        e imprimir su estado actual.
    */

    include "../../../models/conexion.php";
    include "../../../models/query.php";
    include "../../../controllers/rooms/structure.php";

    // ------------------------------------------------------------------------------------------------
    function ViewBooking($cliente){
        $consulta = new Query();
        $data = $consulta->queryClientBooking($cliente);
        
        if ($data){
            foreach ($data as $result) {
                $id_reserva = $result['id_reserva'];
                $habitacion = $result['tipo'];
                $fecha_inicial = $result['fecha_inicial'];
                $fecha_final = $result['fecha_final'];
                $estado = $result['estado'];

                $img_name = $result['img_room'];
                $imgRoom = '<img class="card-img-top" style="max-width:500px;" src="../../public/img/room/'.$img_name.'" alt="...">';
                
                if ($estado = 1) {

                    $state = "Reservada";
                    // Se llama la función para imprimir la tarjeta con la información de la habitación a reservar.
                    cardBooking($id_reserva, $habitacion, $imgRoom, $fecha_inicial, $fecha_final, $state);
                }
            }
        }
        else {
            echo ' <script type="text/javascript"> swal("Estimado cliente", "Inténtelo más tarde", "error"); </script>
                <div class="alert alert-danger"> Error, no se ha realizado la consulta </div>';
        }
    }
    // ------------------------------------------------------------------------------------------------
    

?>