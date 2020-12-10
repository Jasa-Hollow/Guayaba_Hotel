<?php
    foreach ($datos as $result) {
        $id = $result['id_reserva'] ;
        $cliente = $result['email'];
        $m_pago = $result['pago'];
        $id_habitacion = $result['id_habitacion'];
        $fecha_inicial = $result['fecha_inicial'];
        $fecha_final = $result['fecha_final'];
        include 'tabla_lista_reservas.php';
    }
?>