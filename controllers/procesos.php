<?php

    function Token($length)
    {
        $key = '';
        $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";

        for($i=0;$i<$length;$i++)
        {
            $key .= $pattern{rand(0,35)};
        }
        return $key;
    }

    function Email($correo,$token)
    {
        $destino = $correo;

        $desde = "guayabahotel@gmail.com";

        $cabeceras = 'From: Ayuda <'.$desde.'>'."\r\n". //Quién envía el correo
                        'Reply-To: '.$desde.' '."\r\n"; //Desde donde se está enviando

        $cabeceras .= 'Content-type: text/html; charset=utf-8'. "\r\n";

        $mensaje = "Token: ".$token;

        $contenido = "Mensaje: " . $mensaje;

        mail($destino, "Solicitud de Token", $contenido, $cabeceras);
        
    }

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