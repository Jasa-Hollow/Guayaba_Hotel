<!-- Archivo para guardar/registrar los datos de los estudiantes. -->
<?php 
    // ---------------------------------------------------------------------------------
    // Archivos para la conexión a la base de datos e insertar datos en esta.
    include '../../models/conexion.php';
    include '../../models/query.php';
    include '../controller_proceso.php';
    // ---------------------------------------------------------------------------------
    
    date_default_timezone_set('America/El_Salvador');

    // ---------------------------------------------------------------------------------
    /*  Datos de los campos, que se obtienen por el método POST
        También se define la clave que es el mismo carnet, y la fecha de matrícula.
    */
    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $id_usuario = $_POST['id_usuario'];
    $id_cliente = $_POST['id_cliente'];
    $tipo = $_POST['tipo'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $movil = $_POST['movil'];
    // .......................... //
    // El correo será el nombre de usuario del cliente.
    $usuario = $_POST['email'];
    // .......................... //
    $password = password_hash($_POST['passw'],PASSWORD_DEFAULT);
    // ---------------------------------------------------------------------------------

    // Parámetros de la función insertUser, siendo las dos tablas a agregar datos.
    $tabla1 = "clientes";
    $tabla2 = "usuarios";

    // Parámetros de la función insertUser, siendo los campos de cada una de las tablas.
    $campos1 = "id_cliente, nombres, apellidos, email, telefono, direccion, id_usuario";
    $campos2 = "id_usuario, usuario, password, tipo";

    // Parámetros de la función insertUser, siendo el valor almacenado en las variables, y los que se insertarán en los campos.
    $valores1 = "'$id_cliente','$nombres','$apellidos','$email','$movil','$direccion','$id_usuario'";
    $valores2 = "'$id_usuario','$usuario','$password','$tipo'";

    // ---------------------------------------------------------------------------------
    // Se ejecuta la función para insertar en la tabla "clientes" y la tabla "usuarios".
    $InsertCliente = InsertUser($tabla1, $campos1, $valores1);
    $InsertUsuario = InsertUser($tabla2, $campos2, $valores2);
    // ---------------------------------------------------------------------------------

    if ($InsertCliente AND $InsertUsuario) {
        echo '<script type="text/javascript"> swal("Estimado usuario", "¡Se han registrado sus datos!", "success"); </script>
                <h1 class="tittle">Guayaba Hotel</h1>';
    }
    else {
        echo '<script type="text/javascript"> swal("Estimado usuario", "¡Ha ocurrido un error ingresando sus datos!", "error"); </script>
        <h1 class="tittle">Guayaba Hotel</h1>';
    }
?>