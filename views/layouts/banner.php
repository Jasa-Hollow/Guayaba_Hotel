<?php
    if (!$_SESSION['tipo']) {
        ?>
            <section class="banner">
                <div class="banner-content" id="capa">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h1 class="title">Guayaba Hotel</h1>
                        </div>
                    </div>
                </div>
            </section>
        <?php
    }
    elseif ($_SESSION['tipo'] == 1) {
        ?>
        <section class="banner">
        <div class="banner-content" id="capa">
			<div class="cap">
				<div class="container-fluid"><br>
					<div class="row">
						<div class="col-md-12">
							<div class="card" style="background-color: #212121;color: white;">
								<h5 class="card-header">Administración</h5>
							</div>
							<div class="card-body" style="background-color:rgb(74, 175, 74);">
								<div id="capa">
									<div class="row">
										<div class="col-md-6" id="clientes">
											<a href="#" id="conten-cliente" class="btn"><img src="../../public/img/clientes.png"
												width="190px" alt=""><br><b>Clientes</b></a>
										</div>
										<div class="clase2 col-md-6">
											<a href="#" id="conten-graficos" class="btn"><img src="../../public/img/graficos.png"
												width="190px" alt=""><br><b>Gráficos</b></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        </section>
        <?php
    }
?>