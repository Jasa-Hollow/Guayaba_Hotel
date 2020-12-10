<!-- Modal Inicio de Sesión-->
<div class="modal fade" id="sesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="margin-left: 22vh;" class="modal-title" id="exampleModalCenterTitle">Iniciar Sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="./controllers/controller_login.php" method="POST">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input name="user" type="text" class="form-control" placeholder="Correo electronico" required autocomplete="off" />
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text material-icons" id="basic-addon1">
                                    lock
                            </span>
                        </div>
                        <input name="passw" type="password" class="form-control" placeholder="Contraseña" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="acclogin" class="btn btn-primary">Iniciar</button>
                </div>
            </form>
        </div>
    </div>
</div>