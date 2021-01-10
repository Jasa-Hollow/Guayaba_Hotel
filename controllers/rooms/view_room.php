<?php
    /*
        Controlador encargado de mostrar al cliente la habitación seleccionada,
        e imprimir los datos de la habitación por medio de una card.
    */

    // ------------------------------------------------------------------------------------------------
    function ViewRoom(){
        $id_habitacion = $_POST['id_habitacion']; // Se obtiene el "ID" de la habitación, gracias a JS.

        $consulta = new Query();
        $condicion = " WHERE id_habitacion = '$id_habitacion'"; // Condición de la consulta a la BD.
        $data = $consulta->queryer("SELECT * FROM habitacion $condicion");
        
        foreach ($data as $result){
            $img_name = $result['img_room'];
            $imgRoom = '<img class="card-img-top" style="max-width:500px;" src="../../public/img/room/'.$img_name.'" alt="...">';

            // Se llama la función para imprimir la tarjeta con la información de la habitación a reservar.
            cardRoom($result['tipo'],$result['descripcion'], $result['capacidad'],$imgRoom);
        }
    }
    // ------------------------------------------------------------------------------------------------

?>