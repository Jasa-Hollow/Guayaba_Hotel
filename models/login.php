<?php
    // ? Archivo para realizar las consultas y operaciones en la base de datos
    class Login 
    {
        // ----------------------------------------------------------------------------------
        //  Funcion para obtener la informacion del usuario en el sistema.
        public function getDataUser($usuario)
        {
            $rows = null;
            $modelo = new ConexionBD();
            $conexion = $modelo->get_conexion();

            $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':usuario', $usuario);
            $statement->execute();

            while ($result = $statement->fetch())
            {
                $rows[] = $result;
            };

            return $rows;
        }
    };

?>