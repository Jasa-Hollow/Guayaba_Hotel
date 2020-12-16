<?php

    function exit_login()
    {
        session_start(); // Se inicia la sesión.

        //Se crea una nueva sesión, donde se almacenan todas las sesiones.

        $_SESSION = array();

        //Se eliminarán todas las sesiones
        session_destroy(); 
        
        //Solo se redirige
        header("Location: ../index.php");

    }

    function del()
    {
        session_start(); // Se inicia la sesión.

        //Se crea una nueva sesión, donde se almacenan todas las sesiones.

        $_SESSION = array();

        //Se eliminarán todas las sesiones
        session_destroy(); 
    }

?>