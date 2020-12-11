<?php
    include '../../../models/conexion.php';
    include '../../../models/query.php';
    include '../../../controllers/controller_proceso.php';

    $datosClientes = $_POST['cliente'];

    switch ($datosClientes) {
        // En caso de que se ingrese el "ID" del cliente.
        case (ctype_digit($datosClientes)) : 
            $data = GetDataUser("clientes, usuarios", "clientes.id_cliente = '$datosClientes' AND clientes.id_usuario = usuarios.id_usuario");
    
            if ($data) 
            {
                foreach ($data as $result) 
                {
                    $id = $result['id_cliente'];
                    $cliente = $result['nombres'].' '.$result['apellidos'];
                    $email = $result['email'];
                    $telefono = $result['telefono'];
                    $direccion = $result['direccion'];
                    $usuario = $result['usuario'];
                    
                } 
            include './card_cliente.php';
    
            }
            else
            
            {
                echo "<script>
                        swal('Estimado usuario', 'No se encontraron datos de ese cliente', 'error')
                    </script>";
            }
            break ;

        // En caso de que se ingrese el nombre del cliente.
        case (ctype_alpha($datosClientes)) :
        $data = GetDataUser("clientes, usuarios", "clientes.nombres LIKE '%$datosClientes%' AND clientes.id_usuario = usuarios.id_usuario");

        if ($data) {
            foreach ($data as $result) {
                $id = $result['id_cliente'];
                $cliente = $result['nombres'].' '.$result['apellidos'];
                $email = $result['email'];
                $telefono = $result['telefono'];
                $direccion = $result['direccion'];
                $usuario = $result['usuario'];
            }
            include './card_cliente.php';
        }
        else {
            echo "<script>
                    swal('Estimado usuario', 'No se encontraron datos de ese cliente',  'error')
                </script>";
        }
        break;
    }
    
?>