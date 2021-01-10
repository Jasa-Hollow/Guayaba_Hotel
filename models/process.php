<?php  
    // Archivo de modelos para hacer los procesos en la base de datos.
    class Process {
        // Función para efectuar los procesos de insertar, actualizar y eliminar datos.
        public function processes($process) {
            $modelo = new ConexionBD();
            $conexion = $modelo->get_conexion();
            $sql = $process;
            $statement = $conexion->prepare($sql);
            if (!$statement) {
                return 0;
            }
            else {
                $statement->execute();
                return 1;
            }
        }

        //Función para insertar datos en cualquier tabla.
        /*
        public function insertData($tabla, $campos, $valores) {
            $modelo = new ConexionBD();
            $conexion = $modelo->get_conexion();
            $sql = "INSERT INTO $tabla($campos) VALUES($valores)";
            $statement = $conexion->prepare($sql);
            if (!$statement)
            {
                return 0;
            }
            else
            {
                $statement->execute();
                return 1;
            }
        }
        */
    }
?>