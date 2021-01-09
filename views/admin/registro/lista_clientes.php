<script src="../../public/js/procesos_form.js"></script>
<?php
    include '../../../.env.php';
    include '../../../models/conexion.php';
    include '../../../controllers/controller_proceso.php';
    include '../../../models/query.php';
?>
<div class="row">
    <div class="col-md-3">
    <div class="card">
            <div class="card-header" style="background-color: #212121;color: white;">
                Buscar por nombre
            </div>
            <div class="card-body">
				<form id="idform1">
					<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">Nombre</span>
					</div>
						<input type="text" name="cliente" class="form-control" autocomplete="off" placeholder="Nombre o ID" required="on">
					</div>
					<button class="btn btn-info">Buscar</button>
				</form>
			</div>
        </div>
        <br>
    </div>
    <div class="col-md-9" style="text-align: center;">
        <div class="card" id="lista_clientes">
            <div class="card-header" style="background-color: #212121;color: white;">
                Lista Clientes
            </div>
            <div class="card-body">
                <div id="data">
                    <?php 
                        if (isset($_GET['listaGeneral'])):
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $datos = DataTable("clientes");
                            if ($datos) 
                            {
                                include "cliente_datos.php";
                            }
                            else 
                            {
                                echo '<div class="alert alert-warning">Tabla clientes sin datos</div>';
                            }
                            ?>
                        </tbody>
                    </table>
                        <?php endif;?> 
                </div>
            </div>
        </div>
        <br>
        <button type="button" id="imprimir_clientes" class="btn btn-danger"><i class="far fa-file-pdf"></i> Imprimir </button>
    </div>
</div>
<script src="../../public/js/print_booking.js"></script>
<br>