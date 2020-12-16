// -----------------------------------------------------------------------------------------------
// Definiendo la hora y fecha en la que se imprime la información
let fecha_actual = new Date(); 
let horafecha = "File_Download: " + fecha_actual.getDate() + "/" // Se obtiene el día.
                + (fecha_actual.getMonth()+1)  + "/" // Se obtiene el mes.
                + fecha_actual.getFullYear() + " @ " // Se obtiene el año.
                + fecha_actual.getHours() + ":" // Se obtiene la hora.
                + fecha_actual.getMinutes() + ":" // Se obtienen los minutos.
                + fecha_actual.getSeconds(); // Por último, se obtienen los segundos.
// -----------------------------------------------------------------------------------------------

// -----------------------------------------------------------------------------------------------
// Función para imprimir un elemento.
function printElement(element, docTitle, horafecha) {
    let ventana = window.open('', 'PRINT', 'height=400,width=600');
    // Se define el título del documento a generar.
    ventana.document.write('<html><head><title>' + docTitle + ' - ' + horafecha + '</title>');
    
    // Se enlaza con los estilos que se desea que tenga.
    ventana.document.write('<link rel="stylesheet" href="../../public/css/bootstrap.min.css">');
    ventana.document.write('<link rel="stylesheet" href="../../public/css/styl.css">');

    // Cabecera y cuerpo del documento que se obtiene por medio del elemento seleccionado.
    ventana.document.write('</head><body >');
    ventana.document.write(element.innerHTML);
    ventana.document.write('</body></html>');
    ventana.document.close();
    ventana.focus();
    ventana.onload = function() {
        ventana.print();
        ventana.close();
    };
    return true;
}
// -----------------------------------------------------------------------------------------------

// -----------------------------------------------------------------------------------------------
/* 
    Se realiza de la siguiente manera, 
    porque dependiendo de la información que solicite el usuario,
    no genera errores al no existir los elementos que se solicitan, 
    y por medio de la estructura "if"
    se comprueba su existencia.
*/
if (document.getElementById("imprimir_reservas")) {
    // Código para escuchar el evento "click" del botón de "Imprimir" en PDF, para las reservas.
    document.querySelector("#imprimir_reservas").addEventListener("click", function() {
        let div = document.querySelector("#lista_reservas");
        printElement(div, "Reservas - Guayaba Hotel", horafecha); // Se llama la función, con los parámetros necesarios.
    });
} 

if (document.getElementById("imprimir_clientes")) {
    // Código para escuchar el evento "click" del botón de "Imprimir" en PDF, para los clientes.
    document.querySelector("#imprimir_clientes").addEventListener("click", function() {
        let div = document.querySelector("#lista_clientes");
        printElement(div, "Clientes - Guayaba Hotel", horafecha);
    });
} 

if (document.getElementById("chart_div")) {
    // Código para escuchar el evento "click" del botón de "Imprimir" en PDF, para los clientes.
    document.querySelector("#imprimir_grafico").addEventListener("click", function() {
        let div = document.querySelector("#chart_div");
        printElement(div, "Gráfico - Guayaba Hotel", horafecha);
    });
}
// -----------------------------------------------------------------------------------------------