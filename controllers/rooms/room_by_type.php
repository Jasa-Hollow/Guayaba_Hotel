<?php
    session_start();
	include "../redirrecionar.php";
	$redic = new Rd();
    $redic->Cliente();
    
    include "../../.env.php";
    include "../../models/conexion.php";
    include "../../models/query.php";
    include "./structure.php";
    

    $id_tipo = $_GET['id_tipo'];

    // Función para llamar el ID del cliente en el sistema.
    function GuestUser(){
        if ($_SESSION['usuario']){
            $consulta = new Query();
            $user = $_SESSION['usuario'];
            $data = $consulta->queryUser("clientes", "email = '$user'"); // Consulta a la BD que trae los registros de los clientes.

            foreach ($data as $result){
                $id_cliente = $result['id_cliente']; // Sólo se trae el ID del cliente que ha iniciado sesión en ese momento.
            }
            return $id_cliente;
        }else{
            $id_cliente = NULL; // Como no se ha iniciado sesión, no existe un ID del cliente.
            return $id_cliente;
        }
    }

    //Función para imprimir imagen dependiendo de la ubicación en el sistema del usuario.
    function ShowImgRoom($img_name){
        $img = '<img class="card-img-top" style="max-height:300px; width:auto;" src="../../public/img/room/'.$img_name.'" alt="...">';
        return $img;
    }
    
    function typeRoom($tabla, $idForm){
        $consulta = new Query();
        $data = $consulta->allRegister($tabla);

        if ($data){
            $i = 1;
            foreach ($data as $result){
                $i = $i;
                $id_habitacion = $result['id_habitacion']; // Se obtiene el ID de la habitación.
                $type = $result['tipo']; // Se obtiene el tipo de habitación.
                $description = $result['descripcion']; // Se obtiene la descripción de la habitación.
                $capacity = $result['capacidad']; // Se obtiene la cantidad de huéspedes por cada habitación.

                $img = ShowImgRoom($result['img_room']); // Se llama el nombre y dirección de la imagen de la habitación.

                structureByType($id_habitacion, GuestUser(), $type, $description, $capacity, $img, $idForm.$i); // Se llama la función para imprimir su estructura.
                $i++;
            }
        }
        else{
            echo "No se realizó la consulta...";
        }
    }
    

    switch($id_tipo){
        case 1:
            typeRoom("personal", "roomReserva");
            break;
        case 2:
            typeRoom("familiar", "roomReserva");
            break;
        case 3:
            typeRoom("doble", "roomReserva");
            break;
        case 4:
            typeRoom("cinco_estrellas", "roomReserva");
            break;
        case 5:
            typeRoom("presidencial", "roomReserva");
            break;
        default:
            # Code...
            break;
    }

?>