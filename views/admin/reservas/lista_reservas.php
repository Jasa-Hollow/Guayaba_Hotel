<?php
    include '../../../models/conexion.php';
    include '../../../controllers/controller_proceso.php';
    include '../../../models/query.php';
?>
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10" style="text-align: center;">
        <div class="card" id="lista_reservas">
            <div class="card-header" style="background-color: #212121;color: white;">
                <h5 style="font-weight: bold; font-style:italic;">Lista de las Reservas</h5>
                <p>
                    En el presente registro, se muestran las reservas efectuadas hasta el momento en el hotel.
                </p>
            </div>
            <div class="card-body">
                <div id="data">
                    <table class="table table-striped table-hover" style="text-align: center;">
                        <thead class="thead-dark">
                            <tr>
                                <th>Código de Reserva</th>
                                <th>Cliente</th>
                                <th>Método de Pago</th>
                                <th>Código de Habitación</th>
                                <th>Fecha Inicial</th>
                                <th>Fecha Final</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $datos = listBooking();
                            if ($datos) {
                                include "tabla_datos.php";
                            }
                            else 
                            {
                                echo '<div class="alert alert-info">Actualmente, no se han hecho reservas en el sistema.</div>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <button type="button" id="imprimir_reservas" class="btn btn-danger"><i class="far fa-file-pdf"></i> Imprimir  </button>
    </div>
    <div class="col-md-1">
    </div>
</div>
<script src="../../public/js/print_booking.js"></script>