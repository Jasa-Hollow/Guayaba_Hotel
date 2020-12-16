let roomCancel = { // Objeto que contiene una propiedad como función, que permite el manejo dinámico del formulario de cancelar reserva.
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


// Función con Jquery y Ajax para el proceso de eliminar un registro de reserva.
$(document).ready(function(){ 
    let i = 1; while (i <= 10){
        roomCancel.ajaxForm("#room_cancel"+i, "room_cancel"+i, "./reserva/del_reserva.php", ".capa_Room");
        i++;
    }
});