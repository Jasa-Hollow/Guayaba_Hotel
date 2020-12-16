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

    $Contreserva =  $conexion->query("SELECT count(id_reserva) AS treserva FROM reserva");

    foreach ($Contreserva as $result) {
        $treserva = $result['treserva'];
    }
    include "barra.php";
    
    ?>
    <div style="text-align: center;">
        <div id="chart_div">

        </div>
        <br>
        <button type="button" id="imprimir_grafico" class="btn btn-danger"><i class="far fa-file-pdf"></i> Imprimir  </button>
    </div>
    <script src="../../public/js/print_booking.js"></script>