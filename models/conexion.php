<?php
    // *Archivo de la conexion a la base de datos.
    class ConexionBD
    {
        // ? Funcion que obtiene la conexion con la base de datos.
        public function get_conexion()
        {
            // Parametros necesarios, siendo estos el usuario, password, el host y el nombre de la BD.
            $user = "root";
            $pass = "";
            $host = "localhost";
            $db = "hotel_g";

            $conexion = new PDO("mysql:host=$host;dbname=$db;",$user, $pass, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

            return $conexion;
        }
    };

?>