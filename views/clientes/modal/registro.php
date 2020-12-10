<?php
    // ---------------------------------------------------------------------------------
    // Archivos para la conexión a la base de datos e insertar datos en esta.
    include '../../../models/conexion.php';
    include '../../../models/query.php';
    include '../../../controllers/controller_proceso.php';
    // ---------------------------------------------------------------------------------
?>
<link rel="stylesheet" href="./public/css/styl.css">

<script src="./public/js/procesos_form.js"></script>

<!-- Modal Registrar Usuario-->
    <div class="col-md-5" id="register">
        <div class="card text-white bg-dark mb-3">
            <div class="card-header">
                <h3>¡¡Regístrate ahora!!</h3>
            </div>
            <div class="card-body" style="opacity: 0.6;">
            <form id="idform" method="POST">
                        <input type="hidden" name="tipo" value="2">
                        <input type="hidden" name="id_usuario" id="num-usuario" value="<?php echo LastRegUser("id_usuario", "id_usuario", "usuarios") ;?>">
                        <input type="hidden" name="id_cliente" id="num-cliente" value="<?php echo LastRegClient("id_cliente", "id_cliente", "clientes") ;?>">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input name="nombre" type="text" class="form-control" placeholder="Nombre" required autocomplete="off"/>
                        </div>
        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input name="apellido" type="text" class="form-control" placeholder="Apellido" required autocomplete="off"/>
                        </div>
        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text material-icons" id="basic-addon1">
                                    lock
                                </span>
                            </div>
                            <input name="passw" type="password" class="form-control" placeholder="Contraseña" required />
                        </div>
        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text material-icons" id="basic-addon1">
                                    drafts
                                </span>
                            </div>
                            <input name="email" type="text" class="form-control" placeholder="Email" required autocomplete="off"/>
                        </div>
        
                        <div class="input-group mb-3">
                			<div class="input-group-prepend">
                				<span class="input-group-text" id="basic-addon1"> <b>Móvil</b> </span>
                			</div>
                		    <input name="movil" type="text" id="movil" class="form-control" required autocomplete="off">
                	    </div>
        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text material-icons" id="basic-addon1">
                                    person_pin_circle
                                </span>
                            </div>
                            <input name="direccion" type="text" class="form-control" placeholder="Dirección" required autocomplete="off"/>
                        </div>
                        <a href="./index.php">
                            <button type="button" id="cerrar" class="btn btn-danger"> <b>Cerrar</b> </button>
                        </a>
                        <button type="submit" name="r_user" id="r_user" class="btn btn-primary"> <b>Registrar</b> </button>
                </form>
            </div>
        </div>
    </div>