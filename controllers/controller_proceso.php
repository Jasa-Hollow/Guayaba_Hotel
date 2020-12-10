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
    /*
	function Selecthabitacion()
	{
		$consultas = new Query();
		$datos = $consultas->listahabitacion();
		foreach ($datos as $datahabit) 
		{
			echo '<option value="'.$datahabit['id_habitacion'].'">'.$datahabit['tipo'].'</option>';
		}
    }
    */
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
?>