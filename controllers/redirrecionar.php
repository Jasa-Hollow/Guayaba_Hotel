<?php 

    class Rd //Redireccionar
    {
        public function Admin()
        {
            if ($_SESSION["tipo"] == 1)
            {

            }
            elseif ($_SESSION["tipo"] == 2)
            {
                header("Location: ../clientes/index.php");
            }
            else 
            {
                header("Location: ../../index.php");
            }
        }

        public function Cliente()
        {
            if ($_SESSION["tipo"] == 2)
            {

            }
            elseif ($_SESSION["tipo"] == 1)
            {
                header("Location: ../admin/index.php");
            }
            else 
            {
                header("Location: ../../index.php");
            }
        }

    }

?>