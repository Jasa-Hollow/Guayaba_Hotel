<?php
    /*
        Controlador encargado de generar aleatoriamente,
        e imprimir los datos de las habitaciones por medio
        de la condicional "switch".
    */

    //Se llaman los archivos de conexión y consulta a la base de datos.
    if ($_SESSION['usuario']){ // Sí existe, quiere decir que está dentro de las vistas.
        include "../../models/conexion.php";
        include "../../models/query.php";
    }
    else{ // Sí no existe, está en el index, por lo tanto, se cambia la dirección.
        include "./models/conexion.php";
        include "./models/query.php";
    }
    
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
        if ($_SESSION['usuario']){ // Sí existe, quiere decir que está dentro de las vistas.
            $img = '<img src="../../public/img/room/'.$img_name.'" class="img-fluid d-block w-100" class="card-img-top" alt="...">';
            return $img;
        }else{ // Sí no existe, está en el index, por lo tanto, se cambia la dirección.
            $img = '<img src="./public/img/room/'.$img_name.'" class="img-fluid d-block w-100" class="card-img-top" alt="...">';
            return $img;
        }
    }

    //Función para definir qué habitación se imprimirá, comparando su "id" con el número aleatorio generado.
    function ShowRooms()
    {
        //Se almacena en una variable la consulta definida en "models/query.php"
        $consulta = new Query();
        $condicion = ""; // Por el momento, la "condición" se define como vacía.
        $data = $consulta->queryRoom($condicion);

        //Líneas para generar aleatoriamente el "id" de la habitación que se imprimirá en cada card.
        $room1 = rand(1,3); $room2 = rand(4,6); $room3 = rand(7,9); 
        $room4 = rand(10,12); $room5 = rand(13,15); $room6 = rand(16,18);

        //Sí la consulta fue exitosa, y se almacenó información en "data", se ejecuta lo siguiente.
        if ($data)
        {
            foreach($data as $result)
            {
                // Se almacenan los "id" de las habitaciones en una variable, y comienza el proceso.
                $id = $result['id_habitacion'];
                switch ($id)
                {
                    // Cuando el "id" es igual al 1° número aleatorio creado.
                    case $id == $room1:
                        ?>
                        <!-- Abertura de los contenedores -->
                        <div class="carousel-item active">
                            <div class="row">
                        <?php
                        //En todos los casos, se redefine la variable "condición", para modificar la consula a la BD.
                        $$condicion = "WHERE ". $room1 ;
                        
                        $type1 = $result['tipo']; // Se obtiene el tipo de habitación.
                        $description1 = $result['descripcion']; // Se obtiene la descripción de la habitación.
                        $capacity1 = $result['capacidad']; // Se obtiene la cantidad de huéspedes por cada habitación.

                        $img = ShowImgRoom($result['img_room']); // Se llama el nombre y dirección de la imagen de la habitación.

                        structure($id, GuestUser(), $type1, $description1, $capacity1, $img, "formReserva1"); // Se llama la función para imprimir su estructura.
                        break;
                    
                    // Cuando el "id" es igual al 2° número aleatorio creado.
                    case $id == $room2:
                        $$condicion = "WHERE ". $room2 ;

                        $img = ShowImgRoom($result['img_room']);

                        //        id  id_cliente  tipo de habitación  descripción            capacidad             id del formulario.
                        structure($id, GuestUser(), $result['tipo'], $result['descripcion'], $result['capacidad'], $img, "formReserva2");
                        break;

                    // Cuando el "id" es igual al 3° número aleatorio creado.
                    case $id == $room3:
                        $$condicion = "WHERE ". $room3 ;
                        
                        $img = ShowImgRoom($result['img_room']);

                        structure($id, GuestUser(), $result['tipo'], $result['descripcion'], $result['capacidad'], $img, "formReserva3");
                        ?>
                            </div>
                        </div>
                        <?php
                        break;
                    
                    // Cuando el "id" es igual al 4° número aleatorio creado.
                    case $id == $room4:
                        ?>
                            
                        <div class="carousel-item">
                            <div class="row">
                        <?php
                        $$condicion = "WHERE ". $room4 ;
                        
                        $img = ShowImgRoom($result['img_room']);

                        structure($id, GuestUser(), $result['tipo'], $result['descripcion'], $result['capacidad'], $img, "formReserva4");
                        break;

                    // Cuando el "id" es igual al 5° número aleatorio creado.
                    case $id == $room5:
                        $$condicion = "WHERE ". $room5 ;
                        
                        $img = ShowImgRoom($result['img_room']);

                        structure($id, GuestUser(), $result['tipo'], $result['descripcion'], $result['capacidad'], $img, "formReserva5");
                        break;

                    // Cuando el "id" es igual al 6° número aleatorio creado.
                    case $id == $room6:
                        $$condicion = "WHERE ". $room6 ;
                        
                        $img = ShowImgRoom($result['img_room']);

                        structure($id, GuestUser(), $result['tipo'], $result['descripcion'], $result['capacidad'], $img, "formReserva6");
                        ?>
                            </div>
                        </div> <!-- Cierre de los contenedores -->
                        <?php
                        break;
                    
                    //En este caso, el código a ejecutar por defecto queda vacío, debido a que en algún caso, siempre se ejecutará.
                    default:
                        # code...
                        break;
                }
            }
        }
        // Sí la consulta no fue exitosa, se realiza la siguiente acción.
        else{ echo '<div class="alert-danger"> No existen datos en la tabla "habitacion" </div>'; }
    }
?>