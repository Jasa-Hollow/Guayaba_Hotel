<?php
    if ($_SESSION['tipo']){
        if ($_SESSION['tipo'] == 1) {
            ?>
                <head>
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta charset="UTF-8">
                    <title>Administración</title>
                    <link rel="icon" type="image/png" href="../../public/img/icon/hotel_logo.png">

                    <!-- CSS -->
                    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
                    <link rel="stylesheet" href="../../public/css/estilo.css">
                    <link rel="stylesheet" href="../../public/css/style.css">
		
                    <!-- JS -->
                    <script src="../../public/js/jquery-3.5.1.slim.min.js"></script>
                    <script src="../../public/js/jquery-1.9.1.min.js"></script>
                    <script src="../../public/js/bootstrap.min.js"></script>

                    <!-- Estilo para las alertas, librería. -->
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		
                    <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
                </head>
            <?php
        }
        elseif ($_SESSION['tipo'] == 2) {
            ?>
                <head>
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta charset="UTF-8">
                    <title>Portal del Cliente</title>
                    <link rel="icon" type="image/png" href="../../public/img/icon/hotel_logo.png">
        
                    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
                    <link rel="stylesheet" href="../../public/css/estilo.css">
                    <link rel="stylesheet" href="../../public/css/style.css">
                    <!--JS -->
                    <script src="../../public/js/jquery-3.5.1.slim.min.js"></script>
                    <script src="../../public/js/jquery-1.9.1.min.js"></script>
                    <script src="../../public/js/bootstrap.min.js"></script>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>

                    <!-- Estilo para las alertas, librería. -->
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		
                    <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
		
                    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Oswald&display=swap" rel="stylesheet">
                </head>
            <?php
        }
    }

    else {
        ?>
            <head>
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta charset="UTF-8">
                <title> Reservas Guayaba Hotel </title>
                <link rel="icon" type="image/png" href="./public/img/icon/hotel_logo.png">

                <!-- CSS -->
                <link rel="stylesheet" href="./public/css/bootstrap.min.css">
                <link rel="stylesheet" href="./public/css/style.css">

                <!-- JS -->
                <script src="./public/js/jquery-3.5.1.slim.min.js"></script>
                <script src="./public/js/jquery-1.9.1.min.js"></script>
                <script src="./public/js/bootstrap.min.js"></script>

                <!-- Other CDN -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>

                <!-- Estilo para las alertas, librería. -->
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                <!-- Font Awesome -->
                <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
    
                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Oswald&display=swap" rel="stylesheet">

                <script src="./public/js/js_funciones.js"></script>
            </head>
        <?php
    }
?>