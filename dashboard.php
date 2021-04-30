<?php

// Crear conexión
$conn = new mysqli("localhost", "root", "", "covianalytics4");

// Grafica Genero y respuesta 9
$graph1 = "SELECT genero, count(*) as number FROM datos_usuario GROUP BY genero";
$graph2 = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Preguntas_idPreguntas = 9 GROUP BY Respuesta";
$res = $conn->query($graph1);
$res2 = $conn->query($graph2);
$graph3 = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Preguntas_idPreguntas = 15 GROUP BY Respuesta";
$res3 = $conn->query($graph3);

// Grafica Comparacion pregunta 8 y 13
$op1a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = '1 a 5 veces al mes' AND Preguntas_idPreguntas = 8 GROUP BY Respuesta";
$op1d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = '1 a 5 veces al mes' AND PreguntaS_idPreguntas = 13 GROUP BY Respuesta";

$op2a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = '6 a 10 veces al mes'AND Preguntas_idPreguntas = 8 GROUP BY Respuesta";
$op2d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = '6 a 10 veces al mes'AND Preguntas_idPreguntas = 13 GROUP BY Respuesta";

$op3a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Más de 10 veces por mes' AND Preguntas_idPreguntas = 8 GROUP BY Respuesta";
$op3d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Más de 10 veces por mes' AND Preguntas_idPreguntas = 13 GROUP BY Respuesta";

$op4a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = '1 vez cada varios meses' AND Preguntas_idPreguntas = 8 GROUP BY Respuesta";
$op4d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = '1 vez cada varios meses' AND Preguntas_idPreguntas = 13 GROUP BY Respuesta";

$op5a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'No realizaba compras en línea' AND Preguntas_idPreguntas = 8 GROUP BY Respuesta";
$op5d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'No realizaba compras en línea' AND Preguntas_idPreguntas = 13 GROUP BY Respuesta";


// Grafica Comparacion pregunta 11 y 16
$op6a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Ropa' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op6d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Ropa' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op7a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Comida a domicilio' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op7d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Comida a domicilio' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op8a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Super a domicilio' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op8d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Super a domicilio' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op9a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Muebles y/o electrodomésticos' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op9d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Muebles y/o electrodomésticos' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op10a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Coleccionables' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op10d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Coleccionables' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op11a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Libros' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op11d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Libros' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op12a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Computadoras y/o electrónicos' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op12d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Computadoras y/o electrónicos' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op13a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Herramientas y ferretería' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op13d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Herramientas y ferretería' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op14a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Entretenimiento' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op14d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Entretenimiento' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op15a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Programas o aplicaciones' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op15d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Programas o aplicaciones' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op16a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Reservaciones y boletos' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op16d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Reservaciones y boletos' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op17a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Artículos de higiene' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op17d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Artículos de higiene' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op18a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Artículos deportivos' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op18d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Artículos deportivos' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op19a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Otros' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op19d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Otros' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

$op20a = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'No realizo compras en línea' AND Preguntas_idPreguntas = 11 GROUP BY Respuesta";
$op20d = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'No realizo compras en línea' AND Preguntas_idPreguntas = 16 GROUP BY Respuesta";

// Grafica pregunta 18

$op21 = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Menos de 1,000'";

$op22 = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = '1,000 - 2,500'";

$op23 = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = '2,500 - 5,000'";

$op24 = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = '5,000 - 7,500'";

$op25 = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = '7,500 - 10,000'";

$op26 = "SELECT Respuesta, count(*) as number FROM respuestas WHERE Respuesta = 'Más de 10,000'";


function isNull($array){
    if($array["number"] === NULL){
        return $array["number"] = 0;
    }
    else{
        return $array["number"]; 
    }

}

function insertQuery($conn,$query){
    $resAntes = $conn->query($query);
    $antes = $resAntes->fetch_assoc();

    return isNull($antes);
}


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

             //Create the 2 data table.
            var data2 = google.visualization.arrayToDataTable([
                ["Respuesta", 'number'],
             <?php
             while($fila = $res2->fetch_assoc()){
                echo "['".$fila["Respuesta"]."', ".$fila["number"]."],";
            }
            ?>

             ]);
        
            var data3 = google.visualization.arrayToDataTable([
                ["Respuesta", "number"],
             <?php
             while($fila = $res3->fetch_assoc()){
                echo "['".$fila["Respuesta"]."', ".$fila["number"]."],";
            }
            ?>
             ]);
        

            // Set chart options
            var options = {'title':'Género',
                           'width':400,
                           'height':300};
            // Set chart options
            var options2 = {'title':'¿Qué plataforma utiliza para comprar en línea?',
                           'width':400,
                           'height':300};
            // Set chart options
            var options3 = {'title':'¿Qué método de pago utiliza usted para sus compras en internet?',
                           'width':400,
                           'height':300};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
            var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
            chart2.draw(data2, options2);
            var chart3 = new google.visualization.PieChart(document.getElementById('chart_div3'));
            chart3.draw(data3, options3);
            
            }
            
            google.charts.load('current', {packages: ['corechart', 'bar']});
            google.charts.setOnLoadCallback(drawBasicA);
            google.charts.setOnLoadCallback(drawBasicB);
            google.charts.setOnLoadCallback(drawBasicC);


            function drawBasicA() {

                var data5 = google.visualization.arrayToDataTable([
                    ['Compras en Linea', 'Antes', 'Despues'],
                    <?php
                        echo "['1 a 5 veces al mes'," .insertQuery($conn,$op1a).",".insertQuery($conn,$op1d)."],";
                        echo "['6 a 10 veces al mes'," .insertQuery($conn,$op2a).",".insertQuery($conn,$op2d)."],";
                        echo "['Más de 10 veces por mes'," .insertQuery($conn,$op3a).",".insertQuery($conn,$op3d)."],";
                        echo "['1 vez cada varios meses'," .insertQuery($conn,$op4a).",".insertQuery($conn,$op4d)."],";
                        echo "['No realizaba compras en línea'," .insertQuery($conn,$op5a).",".insertQuery($conn,$op5d)."]";
                    ?>
                ]);

                var options5 = {
                    title: '¿Que tan seguido compra en linea?',
                    chartArea: {width: '50%'},
                    hAxis: {
                        title: 'Total de Encuestados',
                        minValue: 0
                    },
                    vAxis: {
                        title: 'Compras'
                    }
                };

                    var chart5 = new google.visualization.BarChart(document.getElementById('chart_div4'));

                    chart5.draw(data5, options5);
                }
            function drawBasicB() {

                var data6 = new google.visualization.arrayToDataTable([
                    ['Categoria', 'Antes', 'Despues'],
                    <?php
                        echo "['Ropa'," .insertQuery($conn,$op6a).",".insertQuery($conn,$op6d)."],";
                        echo "['Comida a domicilio'," .insertQuery($conn,$op7a).",".insertQuery($conn,$op7d)."],";
                        echo "['Super a domicilio'," .insertQuery($conn,$op8a).",".insertQuery($conn,$op8d)."],";
                        echo "['Muebles y/o electrodomésticos'," .insertQuery($conn,$op9a).",".insertQuery($conn,$op9d)."],";
                        echo "['Coleccionables'," .insertQuery($conn,$op10a).",".insertQuery($conn,$op10d)."],";
                        echo "['Libros'," .insertQuery($conn,$op11a).",".insertQuery($conn,$op11d)."],";
                        echo "['Computadoras y/o electrónicos'," .insertQuery($conn,$op12a).",".insertQuery($conn,$op12d)."],";
                        echo "['Herramientas y ferretería'," .insertQuery($conn,$op13a).",".insertQuery($conn,$op13d)."],";
                        echo "['Entretenimiento'," .insertQuery($conn,$op14a).",".insertQuery($conn,$op14d)."],";
                        echo "['Programas o aplicaciones'," .insertQuery($conn,$op15a).",".insertQuery($conn,$op15d)."],";
                        echo "['Reservaciones y boletos'," .insertQuery($conn,$op16a).",".insertQuery($conn,$op16d)."],";
                        echo "['Artículos de higiene'," .insertQuery($conn,$op17a).",".insertQuery($conn,$op17d)."],";
                        echo "['Artículos deportivos'," .insertQuery($conn,$op18a).",".insertQuery($conn,$op18d)."],";
                        echo "['Otros'," .insertQuery($conn,$op19a).",".insertQuery($conn,$op19d)."],";
                        echo "['No realizo compras en línea'," .insertQuery($conn,$op20a).",".insertQuery($conn,$op20d)."]";
                    ?>
                ]);
            
                var options6 = {
                    title: '¿De cuáles de las siguientes categorías realizaba compras?',
                    chartArea: {'width': '50%',
                                'height':'auto'
                                },
                    hAxis: {
                        title: 'Total de Encuestados',
                        minValue: 0
                    },
                    vAxis: {
                        title: 'Articulos',
                        textStyle : {
                    fontSize: 7 // or the number you want
                        }

                    }
                };

                    var chart6 = new google.visualization.BarChart(document.getElementById('chart_divB'));

                    chart6.draw(data6, options6);
            }

            function drawBasicC() {

                var data7 = google.visualization.arrayToDataTable([
                    ['Gasto Compras en Linea', 'Total encuestados'],
                    <?php
                        echo "['Menos de 1,000'," .insertQuery($conn,$op21)."],";
                        echo "['1,000 - 2,500'," .insertQuery($conn,$op22)."],";
                        echo "['2,500 - 5,000'," .insertQuery($conn,$op23)."],";
                        echo "['5,000 - 7,500'," .insertQuery($conn,$op24)."],";
                        echo "['7,500 - 10,000'," .insertQuery($conn,$op25)."],";
                        echo "['Más de 10,000'," .insertQuery($conn,$op26)."]";
                    ?>
                ]);

                var options7 = {
                    title: '¿En promedio cuánto dinero estima que gasta en compras en línea al mes?',
                    chartArea: {width: '50%'},
                    hAxis: {
                        title: 'Total de Encuestados',
                        minValue: 0
                    },
                    vAxis: {
                        title: 'Dinero'
                    }
                };

                    var chart7 = new google.visualization.BarChart(document.getElementById('chart_divC'));

                    chart7.draw(data7, options7);
            }
        </script>
</head>

<body>
    <nav>
        <div class="logo"> 
            <h4>Coronanalyst</h4>
        </div>            
    </nav>
    <div class="graficas" align="center">
        <div class="piechart" id="chart_div"></div></li>
        <div class="piechart" id="chart_div2"></div></li>
        <div class="piechart" id="chart_div3"></div></li>
    </div>
        <div align="center" id="chart_div4"></div></li>
        <div align="center" id="chart_divB"></div></li>
        <div align="center" id="chart_divC"></div></li>

    <form action="graphdw1.php" class="inline">
        <input type="submit"  value="Descargar gráficas" name="Submit">
    </form>
</body>

</html>
