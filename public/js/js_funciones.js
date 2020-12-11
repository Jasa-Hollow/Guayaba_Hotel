let siteEvent = { //Objeto que destinado a definir como propiedades, funciones que controlen eventos en las páginas.
    elementClick: function(idElement, idDiv, file){ // Función para todos los eventos "click".
        $(idElement).click(function(e){
            $(idDiv).load(file);
        });
    }
};

$(document).ready(function(){
	// Proceso que carga el formulario de registro de un nuevo usuario.
    siteEvent.elementClick("#registro", "#capa", './views/clientes/modal/registro.php');
    
    //Proceso de carga para ver la lista de clientes
    siteEvent.elementClick("#lista-clientesA", "#capa", './registro/lista_clientes.php?listaGeneral=1');
    siteEvent.elementClick("#lista-clientesB", "#capa", './registro/lista_clientes.php?listaGeneral=1');
    siteEvent.elementClick("#conten-cliente", "#capa", './registro/lista_clientes.php?listaGeneral=1');

    //Proceso de carga para la vista de los graficos
    siteEvent.elementClick("#graficosA", "#capa", './graficos/principal.php');
    siteEvent.elementClick("#graficosB", "#capa", './graficos/principal.php');
    siteEvent.elementClick("#conten-graficos", "#capa", './graficos/principal.php');

    //Proceso de carga para ver las reservas efectuadas en el sistema.
    siteEvent.elementClick("#reservasA", "#capa", './reservas/lista_reservas.php');
    siteEvent.elementClick("#reservasB", "#capa", './reservas/lista_reservas.php');

    // Función para el control de la reserva en el index.
    $(".reservar").click(function(e) {
        e.preventDefault();
        var user = $(this).attr("data-user"); // Se almacena en una variable el nombre del usuario sí este se ha logueado.
        if (!user){ //Sí la variable recibe un valor vacío, nulo o falso, entra en la ejecución.
            swal({
                title: "Querido Usuario/a",
                text: "¡Necesita registrarse para poder reservar una habitación!",
                icon: "warning",
                buttons: ["Ya estoy registrado", "OK"],
                dangerMode: false,
            })
            .then((willDelete) => {
                if (willDelete) {
                swal("¡Ya se ha cargado el formulario de registro, ingrese sus datos!", {
                    icon: "success",
                });
                } 
                else {
                    swal("¡Entendido!", "Inicie sesión haciendo click en la esquina superior izquierda, y seleccione 'Iniciar Sesión'.", "info");
                }
            });
            $("#capa").load("./views/clientes/modal/registro.php");
            $("html, body").animate({ scrollTop: $(".navbar").offset().top }, 1000);
        }
    });
});