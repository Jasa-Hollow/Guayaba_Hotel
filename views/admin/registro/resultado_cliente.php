<?php
     if (isset($_POST['cliente']))
     {
        include './get_data_cliente.php';
     }
     else
     {
        echo '<div class="alert alert-danger">No se encontraron datos....</div>'; 
     }

     
?>