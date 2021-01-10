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
                <?php include '../../layouts/form/pay_form.php'; ?>
            </div>
        </div>
    </div>
    <script src="../../public/js/pay_send.js"></script>
</body>

</html>