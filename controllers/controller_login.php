<?php 

    /* Primero se incluyen los archivos que vamos a utilizar. */ 
    include '../models/conexion.php';
    include '../models/login.php';

    //Luego iniciar la sesion.
    session_start();

    if (isset($_POST['acclogin'])) 
    {
        $user = $_POST['user'];
        $passw = $_POST['passw'];

        //Incluimos el archivo de login.php
        include './login.php';
        AccesoLogin($user, $passw);
    }

    elseif (isset($_POST['Exit_login']))
    {
        exit_login();
    }
    else
    {
        header("Location:../index.php");
    }


?>