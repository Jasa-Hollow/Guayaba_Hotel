$(document).ready(function(){
    // Función con Jquery y Ajax para el proceso de registrar una reserva de habitación.
    processForm.ajaxForm("#form_pago", "form_pago", "./pago_habitacion/pago.php", ".fond");
});