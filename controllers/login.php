<?php

    function AccesoLogin($user, $passw) {
        $consulta = new Login();
        $datos = $consulta->getDataUser($user);

        if ($datos) {
            foreach($datos as $res) {
                $hash = $res['password'];
                $tipo = $res['tipo'];
            }

            // *Segundo filtro de "Password"
            if (password_verify($passw, $hash)) {
                // *Tercer filtro de "Tipo"
                if ($tipo == 1)
                {
                    $_SESSION["usuario"] = $user;
                    $_SESSION["tipo"] = $tipo;

                    header("Location: ../views/admin/index.php");
                }
                elseif ($tipo == 2)
                {
                    $_SESSION["usuario"] = $user;
                    $_SESSION["tipo"] = $tipo;

                    header("Location: ../views/clientes/index.php");
                }
            }
            else {
                header("location:../index.php?mensaje=".base64_encode("La contraseña es incorrecta"));
            }
        }
        else {
            header("location:../index.php?mensaje=".base64_encode("El usuario no tiene permisos de acceso"));
        }
    }
    
?>