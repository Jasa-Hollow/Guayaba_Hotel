<?php
foreach ($datos as $result) {
    $id = $result['id_cliente'];
    $cliente = $result['nombres'].' '.$result['apellidos'];
    $email = $result['email'];
    $telefono = $result['telefono'];
    $direccion = $result['direccion'];
    include 'tabla_lista_clientes.php';
} 
?>