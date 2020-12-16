<?php
   foreach ($datos as $result) {
      $cliente = $result['nombres'].' '.$result['apellidos'];
      $email = $result['email'];
      $telefono = $result['telefono'];
      $direccion = $result['direccion'];
      include 'tabla_lista_clientes.php';
   }
?>