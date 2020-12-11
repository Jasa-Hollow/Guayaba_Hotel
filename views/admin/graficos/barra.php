<script type="text/javascript">

google.charts.load('current', {
    'packages': ['corechart']
});

google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
    var clientes = parseInt('<?php echo $tclientes; ?>');
    var reserva = parseInt('<?php echo $treserva; ?>');
    
    var data = google.visualization.arrayToDataTable([
    ['Clientes', 'Reservas', 'Clientes'],
    ['', reserva,clientes ]
    ]);
    
    var options = {
    title: 'Reservas y clientes',
    vAxis: {
    title: '',
    },
    hAxis: {
    title: 'Resultados'
    },
    seriesType: 'bars',
    series: {
    5: {
    type: 'line'
    }
    },
    'width': 650,
    'height': 390
    };
    
    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}
</script>