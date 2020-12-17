// Función con Jquery y Ajax para el proceso de eliminar un registro de reserva.
$(document).ready(function(){ 
    let i = 1; while (i <= 10){
        processForm.ajaxForm("#room_cancel"+i, "room_cancel"+i, "./reserva/del_reserva.php", ".capa_Room");
        i++;
    }
});