<!DOCTYPE html>
<html lang="en">

<head>
    <!--Estos archivos hacen que funcionen lo del calendario-->
    <link rel="stylesheet" href="../../public/css/bootstrap-datepicker.css">
    <script src="../../public/js/bootstrap-datepicker.min.js"></script>
    <scrip src="../../public/js/bootstrap-datepicker.es.min.js"></scrip>
</head>
<?php
    include '../../../.env.php';
	include '../../../models/conexion.php';
	include '../../../models/query.php';
	include '../../../controllers/controller_proceso.php';
?>
<body>
    <?php
        include '../../../controllers/rooms/structure.php';
        include '../../../controllers/rooms/view_room.php';
        ViewRoom();
    ?>
    <div class="conten1">
        <div class="container">
            <div class="fond">
                <img src="../../public/img/form_pago2.jpg" style="border-radius: 10px;" width="100%" height="338vh" alt="">
                <form id="form_pago" enctype="multipart/form-data" method="POST">
                    <div class="conten2">
                        <!-- Aquí es dónde se recibe el id del cliente y de la fecha. -->
                        <input type="hidden" name="id_cliente" class="form-control" required="ON" readonly="" value="<?php echo $_POST['id_cliente']; ?>">
                        
                        <input type="hidden" name="id_fecha" id="" value="<?php echo LastFecha("id_fecha", "id_fecha", "fecha") ;?>">
                        
                        <!-- Aquí es dónde se recibe el id de la habitación a reservar. -->
                        <input type="hidden" name="id_habitacion" class="form-control" required="ON" readonly="" value="<?php echo $_POST['id_habitacion']; ?>">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend date">
                                        <span for="inputEmail4" class="input-group-text" id="basic-addon1">
                                            Fecha de entrada
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="fechaEntrada" placeholder="Seleccionar" id="datos" data-provide="datepicker" data-date-format="yyyy-mm-dd" required autocomplete="off" />
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend date">
                                        <span class="input-group-text" id="basic-addon1">
                                            Fecha de salida
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="fechaSalida" placeholder="Seleccionar" id="datos" data-provide="datepicker" data-date-format="yyyy-mm-dd" required autocomplete="off"/>
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend date" data-provide="datepicker">
                                        <span class="input-group-text" id="basic-addon1">
                                            Formas de Pago
                                        </span>
                                    </div>
                                    <select id="inputState" class="custom-select" name="id_pago" required="ON">
                                        <option disabled selected>Seleccione el modo de pago</option>
                                        <?php SelectPago();?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            Número de cuenta
                                        </span>
                                    </div>
                                    <input name="Ncuenta" type="password" class="form-control" placeholder="Numero de Cuenta" required />
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Reservar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../public/js/pay_send.js"></script>
</body>

</html>