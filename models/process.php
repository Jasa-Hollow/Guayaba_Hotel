<?php  
    // Archivo de modelos para hacer los procesos en la base de datos.
    class Process 
    {
        //Función para insertar datos en cualquier tabla.
        public function delete($tabla, $campo, $id) 
        {
            $modelo = new ConexionBD();
            $conexion = $modelo->get_conexion();
            $sql = "DELETE FROM $tabla WHERE $campo = $id";
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
    }
?>