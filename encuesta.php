<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
	<LINK HREF="logokfj.ico" REL="icon">
    <title>Covianalytics</title>
</head>

<?php
	session_start();
?>

<body>
    <nav>
        <div class="logo"> 
            <h4>Covianalytics</h4>
        </div>            
        <ul class="nav-links">
            <li>
                <a href="conocemas.html">Conoce más</a>
            </li>
            <li>
                <a href="contactanos.html">Contáctanos</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
	
	<div class="encuesta-format">
		<form action="preguntas.php" value="Encuesta" >
		<label>Pregunta 1:</label><br>
		
		<table>
			<tr class="option">
				<td> Totalmente de acuerdo </td>
				<td> De acuerdo </td>
				<td> Neutral</td> 
				<td>Desacuerdo</td>
				<td>Totalmente en desacuerdo</td>
			</tr>
			<tr>
				<td>
					<input type="radio" id="p1" class="opciones" name="p1" value="p1-5" required>
				</td>
				<td>
					<input type="radio" id="p1" class="opciones" name="p1" value="p1-4">
				</td>
				<td>
					<input type="radio" id="p1" class="opciones" name="p1" value="p1-3">
				</td>
				<td>
					<input type="radio" id="p1" class="opciones" name="p1" value="p1-2">
				</td>
				<td>
					<input type="radio" id="p1" class="opciones" name="p1" value="p1-1">
				</td>
			</tr>
		</table>
		
		<label>Pregunta 2:</label><br>
		
		<table>
			<tr class="option">
				<td> Totalmente de acuerdo </td>
				<td> De acuerdo </td>
				<td> Neutral</td> 
				<td>Desacuerdo</td>
				<td>Totalmente en desacuerdo</td>
			</tr>
			<tr>
				<td>
					<input type="radio" id="p2" class="opciones" name="p2" value="p2-5" required>
				</td>
				<td>
					<input type="radio" id="p2" class="opciones" name="p2" value="p2-4">
				</td>
				<td>
					<input type="radio" id="p2" class="opciones" name="p2" value="p2-3">
				</td>
				<td>
					<input type="radio" id="p2" class="opciones" name="p2" value="p2-2">
				</td>
				<td>
					<input type="radio" id="p2" class="opciones" name="p2" value="p2-1">
				</td>
			</tr>
		</table>
		
		<label>Pregunta 3:</label><br>
		
		<table>
			<tr class="option">
				<td> Totalmente de acuerdo </td>
				<td> De acuerdo </td>
				<td> Neutral</td> 
				<td>Desacuerdo</td>
				<td>Totalmente en desacuerdo</td>
			</tr>
			<tr>
				<td>
					<input type="radio" id="p3" class="opciones" name="p3" value="p3-5" required>
				</td>
				<td>
					<input type="radio" id="p3" class="opciones" name="p3" value="p3-4">
				</td>
				<td>
					<input type="radio" id="p3" class="opciones" name="p3" value="p3-3">
				</td>
				<td>
					<input type="radio" id="p3" class="opciones" name="p3" value="p3-2">
				</td>
				<td>
					<input type="radio" id="p3" class="opciones" name="p3" value="p3-1">
				</td>
			</tr>
		</table>
		
		<label>Pregunta 4:</label><br>
		
		<table>
			<tr class="option">
				<td> Totalmente de acuerdo </td>
				<td> De acuerdo </td>
				<td> Neutral</td> 
				<td>Desacuerdo</td>
				<td>Totalmente en desacuerdo</td>
			</tr>
			<tr>
				<td>
					<input type="radio" id="p4" class="opciones" name="p4" value="p4-5" required>
				</td>
				<td>
					<input type="radio" id="p4" class="opciones" name="p4" value="p4-4">
				</td>
				<td>
					<input type="radio" id="p4" class="opciones" name="p4" value="p4-3">
				</td>
				<td>
					<input type="radio" id="p4" class="opciones" name="p4" value="p4-2">
				</td>
				<td>
					<input type="radio" id="p4" class="opciones" name="p4" value="p4-1">
				</td>
			</tr>
		</table>
		
		<label>Pregunta 5:</label><br>
		
		<table>
			<tr class="option">
				<td> Totalmente de acuerdo </td>
				<td> De acuerdo </td>
				<td> Neutral</td> 
				<td>Desacuerdo</td>
				<td>Totalmente en desacuerdo</td>
			</tr>
			<tr>
				<td>
					<input type="radio" id="p5" class="opciones" name="p5" value="p5-5" required>
				</td>
				<td>
					<input type="radio" id="p5" class="opciones" name="p5" value="p5-4">
				</td>
				<td>
					<input type="radio" id="p5" class="opciones" name="p5" value="P5-3">
				</td>
				<td>
					<input type="radio" id="p5" class="opciones" name="p5" value="p5-2">
				</td>
				<td>
					<input type="radio" id="p5" class="opciones" name="p5" value="p5-1">
				</td>
			</tr>
		</table>
	</div>
	
	<div class="posenc">
			<input type="submit"  value="Finalizar">
		</form>
	</div>
	
	

    <script src="app.js"></script>
    
</body>
</html>