let payForm = { // Objeto que contiene una propiedad como función, que permite el manejo dinámico del formulario de pago.
    ajaxPayment: function(idForm, id, file, idDiv){ // Función para hacer uso de "AJAX" en el envío de información del formulario de pago.
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
    // Función con Jquery y Ajax para el proceso de registrar una reserva de habitación.
    payForm.ajaxPayment("#form_pago", "form_pago", "./pago_habitacion/pago.php", ".fond");
});