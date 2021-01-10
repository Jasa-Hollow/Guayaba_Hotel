<?php  
    // Archivo de modelos para hacer las consultas a la base de datos.

    class Query /*Clase de las consultas a la base de datos.*/
    {
        //Función para insertar datos en cualquier tabla.
        public function insertData($tabla, $campos, $valores) {
            $modelo = new ConexionBD();
            $conexion = $modelo->get_conexion();
            $sql = "INSERT INTO $tabla($campos) VALUES($valores)";
            $statement = $conexion->prepare($sql);
            if (!$statement) {
                return 0;
            }
            else {
                $statement->execute();
                return 1;
            }
        }
        
        public function queryer($sentence) {
            $rows = null;
            $modelo = new ConexionBD();
            $conexion = $modelo->get_conexion();
            $sql = $sentence; // La sentencia de la consulta SQL.
            $statement = $conexion->prepare($sql);
            $statement->execute();
    
            while ($result = $statement->fetch())
            {
                $rows[] = $result;
            };
    
            return $rows;
        }
        
        //Función para consultar a la BD el último ID registrado de cualquier tabla.
        public function UltimoRegUser($id, $alias, $tabla)
        {
            $rows = null;
            $modelo = new ConexionBD();
            $conexion = $modelo->get_conexion();
            $sql = "SELECT MAX($id) AS $alias FROM $tabla";
            $statement = $conexion->prepare($sql);
            $statement->execute();

            while ($result = $statement->fetch())
            {
                $rows[] = $result;
            };

            return $rows;
        }
        
        // Función para llamar los registros de las reservas en la BD.
        public $bookingSQL = "SELECT id_reserva, clientes.email, modopago.pago, habitacion.id_habitacion, fecha.fecha_inicial, fecha.fecha_final 
                FROM `reserva` 
                INNER JOIN clientes ON reserva.id_cliente = clientes.id_cliente 
                INNER JOIN modopago ON reserva.id_pago = modopago.id_pago
                INNER JOIN habitacion ON reserva.id_habitacion = habitacion.id_habitacion
                INNER JOIN fecha ON reserva.id_fecha = fecha.id_fecha
                ORDER BY id_reserva";

        // Función para llamar el registro de la reserva, que el cliente ha reservado en la BD.
        public function queryClientBooking($cliente){
            $rows = null;
			$modelo = new ConexionBD();
			$conexion = $modelo->get_conexion();
			$sql = "SELECT id_reserva, estado, 
                    habitacion.tipo, habitacion.img_room,
                    fecha.id_fecha, fecha.fecha_inicial, fecha.fecha_final 
                    FROM `reserva` 
                    INNER JOIN clientes ON reserva.id_cliente = clientes.id_cliente 
                    INNER JOIN modopago ON reserva.id_pago = modopago.id_pago
                    INNER JOIN habitacion ON reserva.id_habitacion = habitacion.id_habitacion
                    INNER JOIN fecha ON reserva.id_fecha = fecha.id_fecha
                    WHERE clientes.email = '$cliente'
                    ORDER BY id_reserva"; // Consulta a la tabla de reservas, para traer toda la información necesaria.
			$statement = $conexion->prepare($sql);
			$statement->execute();

			while ($result = $statement->fetch())
			{
				$rows[] = $result;
			}
			return $rows;
        }
    }
?>