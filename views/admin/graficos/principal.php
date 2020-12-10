<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php
    include '../../../models/conexion.php';
    include '../../../models/query.php';
    
    $modelo = new ConexionBD();
    $conexion = $modelo->get_conexion();

    $contCliente = $conexion->query("SELECT count(id_cliente) AS tclientes FROM clientes");

    foreach ($contCliente as $result) {
        $tclientes = $result['tclientes'];
    }

    $ContHabitacion =  $conexion->query("SELECT count(id_habitacion) AS thabitacion FROM habitacion");

    foreach ($ContHabitacion as $result) {
        $thabitacion = $result['thabitacion'];
    }
    include "barra.php";
    
    ?>    
    <div id="chart_div">
        
    </div>