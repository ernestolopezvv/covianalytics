<?php

// Crear conexión
$conn = new mysqli("localhost", "root", "", "covianalytics4");

$query = "SELECT genero, count(*) as number FROM datos_usuario GROUP BY genero";
$graph2 = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Preguntas_idPreguntas = 9 GROUP BY Respuesta";
$res = $conn->query($query);
$res2 = $conn->query($graph2);
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
	<LINK HREF="logokfj.ico" REL="icon">
    <title>Coronanalyst</title>

    <head>
        <!--Load the Google API-->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">

          // Load the Visualization API and the piechart package.
          google.load('visualization', '1.0', {'packages':['corechart']});

          // Set a callback to run when the Google Visualization API is loaded.
          google.setOnLoadCallback(drawChart);

          // Callback that creates and populates a data table,
          // instantiates the pie chart, passes in the data and
          // draws it.
          function drawChart() {

            // Create the data table.
             var data = google.visualization.arrayToDataTable([
                ["genero", 'number'],
             <?php
             while($fila = $res->fetch_assoc()){
                echo "['".$fila["genero"]."', ".$fila["number"]."],";
            }
            ?>
             ]);

            // Create the 2 data table.
            var data2 = google.visualization.arrayToDataTable([
                ["Respuesta", 'number'],
             <?php
             while($fila = $res2->fetch_assoc()){
                echo "['".$fila["Respuesta"]."', ".$fila["number"]."],";
            }
            ?>
             ]);
        
            var data3 = new google.visualization.DataTable();
            data3.addColumn('string', 'Year');
            data3.addColumn('number', 'Sales');
            data3.addColumn('number', 'Expenses');
            data3.addRows([
              ['2004', 1000, 400],
              ['2005', 1170, 460],
              ['2006',  860, 580],
              ['2007', 1030, 540]
            ]);

            // Set chart options
            var options = {'title':'Género',
                           'width':400,
                           'height':300};
            // Set chart options
            var options2 = {'title':'Dónde compras más',
                           'width':400,
                           'height':300};
            // Set chart options
            var options3 = {'title':'Line chart',
                           'width':400,
                           'height':300};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
            var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
            chart2.draw(data2, options2);
            var chart3 = new google.visualization.LineChart(document.getElementById('chart_div3'));
            chart3.draw(data3, options3);

          }
        </script>
</head>

<body>
    <nav>
        <div class="logo"> 
            <h4>Coronanalyst</h4>
        </div>            
    </nav>
	
    <div align="center" id="chart_div"></div>
    <div align="center" id="chart_div2"></div>
    <div align="center" id="chart_div3"></div>
    <script src="app.js"></script>
</body>
</html>