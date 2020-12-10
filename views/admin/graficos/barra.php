<script type="text/javascript">
google.charts.load('current', {
    'packages': ['corechart']
   });
   google.charts.setOnLoadCallback(drawVisualization);
 
    function drawVisualization() {
    var clientes = parseInt('<?php echo $tclientes; ?>');
    var habitaciones = parseInt('<?php echo $thabitacion; ?>');
    // Some raw data (not necessarily accurate)
    var data = google.visualization.arrayToDataTable([
    ['Clientes', 'habitaciones', 'clientes'],
    ['', habitaciones,clientes ]
    ]);
    
    var options = {
    title: 'Habitaciones y clientes',
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