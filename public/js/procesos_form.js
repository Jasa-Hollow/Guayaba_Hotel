let processForm = { // Objeto que contiene una propiedad como función, que permite el manejo dinámico de formularios en el sistema.
    elementClick: function(idElement, idDiv, file){ // Función para todos los eventos "click".
        $(idElement).click(function(e){
            $(idDiv).load(file);
        });
    },
    ajaxForm: function(idForm, id, file, idDiv){ // Función para hacer uso de "AJAX" en el envío de información de formularios.
        $(idForm).on("submit", function(e){
            e.preventDefault();
            var formData = new FormData(document.getElementById(id));
            formData.append("data", "valor");
            $.ajax({
                url: file,
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
            //Los datos a utilizar, en la capa que se quiere insertar. Agregar a controladores, cuando ya esté realizado el proceso.
            .done(function(res){
                $(idDiv).html(res);
            });
        });
    }
};

$(document).ready(function(){
	// Función con Jquery y Ajax para el proceso de guardar/registrar la información de un cliente.
    processForm.ajaxForm("#idform", "idform", "./controllers/register/registro_user.php", "#capa");
    
    // Función con Jquery y Ajax para el proceso de registrar una reserva de habitación.
    processForm.ajaxForm("#form_pago", "form_pago", "./pago_habitacion/pago.php", ".capa_Room");

    //Funcion de carga para el buscador en la vista de administrador.
    processForm.ajaxForm("#idform1", "idform1", "./registro/resultado_cliente.php", "#data");

    //Proceso de carga para ver la lista de reservaciones hechas por el usuario.
    processForm.elementClick("#estadoReservaA", ".capa_Room", './reserva/estado_reserva.php');
    processForm.elementClick("#estadoReservaB", ".capa_Room", './reserva/estado_reserva.php');
    
    // Se realiza un ciclo "while", para que el script pueda identificar los 6 formularios por su ID.
    let i = 1; while (i <= 6){
        processForm.ajaxForm("#formReserva"+i, "formReserva"+i, "./pago_habitacion/form_pago.php", ".capa_Room"); // Función para reservar una habitación ya desde las vistas.
        i++;
    }
    
    // Se realiza un ciclo "while", para que el script pueda identificar los 6 botones por su ID.
    let j = 1; while (j <= 5){
        processForm.elementClick("#view"+j, ".capa_Room", "../../controllers/rooms/room_by_type.php?id_tipo="+j);
        j++;
    }

	$('#movil').inputmask('9999-9999');
});