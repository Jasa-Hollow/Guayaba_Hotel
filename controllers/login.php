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

    function HelpUser($correo, $mensaje){
        $consulta = new Login();
        $datos = $consulta->getDataUser($correo);

        if ($datos)
        {
            foreach($datos as $res)
            {
                $tipo = $res['tipo'];
            }

            $buscaCorreo = $consulta->buscarEmail($correo, $tipo);
            
            
            foreach($buscaCorreo as $result)
            {
                $email = $result['email'];
            }

            $token = Token(8);

            Email($email, $token);

            $updatetoken = $consulta->modificarUsuario('token', $token, $correo);

            if ($updatetoken)
            {
                echo'<script type="text/javascript">
                        alert("Token Generado revisar correo (spam)");
                        window.location.href="../cambio_clave.php";
                    </script>';
            }
            else
            {
                echo'<script type="text/javascript">
                        alert("Error al generar Token intente de nuevo");
                        window.location.href="../index.php";
                    </script>';
            }
        }
    }


    function CambioClaveToken($user,$token,$clave1,$clave2)
    {
        $consulta = new Login();
        $datos = $consulta->getDataUser($user);

        if ($datos)
        {
            foreach($datos as $res)
            {
                $tokenBD = $res['token'];
            }

            if ($clave1 == $clave2)
            {
                if ($token == $tokenBD)
                {
                    $passw = password_hash($clave1, PASSWORD_DEFAULT);

                    $updateClave = $consulta->modificarUsuario("passw",$passw, $user);
                    $updateClave = $consulta->modificarUsuario("token",'', $user);

                    if ($updateClave)
                    {
                        echo'<script type="text/javascript">
                        alert("Clave modificada exitosamente...");
                        window.location.href="../index.php";
                        </script>';
                    }
                    else
                    {
                        echo'<script type="text/javascript">
                        alert("Error al modificar la clave...");
                        window.location.href="../cambio_clave.php";
                        </script>';
                    }
                }
                else
                {
                    echo'<script type="text/javascript">
                        alert("Token No valido...");
                        window.location.href="../cambio_clave.php";
                    </script>';
                }
            }
            else
            {
                echo'<script type="text/javascript">
                        alert("Las contrasenas no son iguales...");
                        window.location.href="../cambio_clave.php";
                    </script>';
            }
        }
        else
        {
            echo'<script type="text/javascript">
                        alert("Usuario no existe...");
                        window.location.href="../cambio_clave.php";
                    </script>';
        }
    }
?>