<?php
    // ------------------------------------------------------------------
    // Funciones para consultar el último ID registrado.
    function LastRegUser($id, $alias, $tabla)
    {        
        $consultas = new Query();
        $datos = $consultas->UltimoRegUser($id, $alias, $tabla);
        foreach ($datos as $dataRU)
        {
            $id_user = $dataRU['id_usuario'];
        }
        return $id_user + 1;
    }
    
    function LastRegClient($id, $alias, $tabla)
    {   
        $consultas = new Query();
        $datos = $consultas->UltimoRegUser($id, $alias, $tabla);
        foreach ($datos as $dataRU)
        {
            $id_cliente = $dataRU['id_cliente'];
        }
        return $id_cliente + 1;
    }
    
    function LastFecha($id, $alias, $tabla)
    {   
        $consultas = new Query();
        $datos = $consultas->UltimoRegUser($id, $alias, $tabla);
        foreach ($datos as $dataRU)
        {
            $id_fecha = $dataRU['id_fecha'];
        }
        return $id_fecha + 1;
    }
    
    // ------------------------------------------------------------------

    // ------------------------------------------------------------------
    // Función para insertar/agregar un nuevo usuario al sistema.
    function InsertUser($tabla, $campos, $valores){
        $consultas = new Query();
        $datos = $consultas->insertData($tabla, $campos, $valores);
        
        if ($datos)
        {
            echo "<script>
                    alertify.success('Datos guardados en tabla: " . $tabla . "');
                </script>";
        }
        else
        {
            echo "<script>
                    alertify.error('Error al guardar los datos en la tabla: " . $tabla . "');
                </script>";
        }

        return $datos;
    }
    // ------------------------------------------------------------------

    // ------------------------------------------------------------------
    // Función para cancelar una reserva.
    function deleteBooking($tabla, $campo, $id) {
        $proceso = new Process();
        $datos = $proceso->delete($tabla, $campo, $id);
        
        if ($datos) {
            echo "<script>
                    alertify.success('Datos eliminados de la tabla: " . $tabla . "');
                </script>";
        }
        else {
            echo "<script>
                    alertify.error('Error al eliminar los datos de la tabla: " . $tabla . "');
                </script>";
        }

        return $datos;
    }
    // ------------------------------------------------------------------

    // ------------------------------------------------------------------
    // Función para los registros de Modo de Pago desde la BD, e imprimirlos en el formulario de pago.
    function SelectPago()
	{
		$consultas = new Query();
		$datos = $consultas->listaPago();
		foreach ($datos as $dataPago) 
		{
			echo '<option value="'.$dataPago['id_pago'].'">'.$dataPago['pago'].'</option>';
		}
	}
    // ------------------------------------------------------------------
    
    // ------------------------------------------------------------------
	// Traer información de cualquier tabla.
	function DataTable($tabla) {
        $consultas = new Query();
        $datos = $consultas->allRegister($tabla);
        return $datos;
    }
    // ------------------------------------------------------------------

    // ------------------------------------------------------------------
	// Función para consultar la información de las reservas.
	function listBooking() {
        $consultas = new Query();
        $datos = $consultas->queryBooking();
        if ($datos){
            return $datos;
        }
    }
    // ------------------------------------------------------------------

    // ------------------------------------------------------------------
    // Función para consultar  los datos de los clientes.
    function GetDataUser($tabla, $condicion) {
        $consultas = new Query();
        $datos = $consultas->queryUser($tabla,$condicion);
        return $datos;
    }
    // ------------------------------------------------------------------
?>