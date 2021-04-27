<?php
	session_start();
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

	<script>
		function validate(){
			var valid1 = false;
			var valid2 = false;
			var valid3 = false;
			var valid4 = false;
			var valid5 = false;
			var valid6 = false;
			var valid7 = false;
			var valid8 = false;

			// Pregunta 9 ------------------------------------
			if(document.getElementById("p2.1").checked){
				valid1 = true;
			}
			else if (document.getElementById("p2.2").checked){
				valid1 = true;
			}
			else if (document.getElementById("p2.3").checked){
				valid1 = true;
			}
			else if (document.getElementById("p2.4").checked){
				valid1 = true;
			}
			else if (document.getElementById("p2.5").checked){
				valid1 = true;
			}
			else if (document.getElementById("p2.6").checked){
				valid1 = true;
			}
			else if (document.getElementById("p2.7").checked){
				valid1 = true;
			}
			else if (document.getElementById("p2.8").checked){
				valid1 = true;
			}
			
			
			//Pregunta 10 ------------------------------------
			if (document.getElementById("p3.1").checked){
				valid2 = true;
			}
			else if (document.getElementById("p3.2").checked){
				valid2 = true;
			}
			else if (document.getElementById("p3.3").checked){
				valid2 = true;
			}
			else if (document.getElementById("p3.4").checked){
				valid2 = true;
			}
			else if (document.getElementById("p3.5").checked){
				valid2 = true;
			}
			else if (document.getElementById("p3.6").checked){
				valid2 = true;
			}
			else if (document.getElementById("p3.7").checked){
				valid2 = true;
			}
			else if (document.getElementById("p3.8").checked){
				valid2 = true;
			}
			else if (document.getElementById("p3.9").checked){
				valid2 = true;
			}
			
			
			// Pregunta 11 ------------------------------------
			if (document.getElementById("p4.1").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.2").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.3").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.4").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.5").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.6").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.7").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.8").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.9").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.10").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.11").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.12").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.13").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.14").checked){
				valid3 = true;
			}
			else if (document.getElementById("p4.15").checked){
				valid3 = true;
			}
			
			
			// Pregunta	14 ------------------------------------
			if (document.getElementById("p7.1").checked){
				valid4 = true;
			}
			else if (document.getElementById("p7.2").checked){
				valid4 = true;
			}
			else if (document.getElementById("p7.3").checked){
				valid4 = true;
			}
			else if (document.getElementById("p7.4").checked){
				valid4 = true;
			}
			else if (document.getElementById("p7.5").checked){
				valid4 = true;
			}
			else if (document.getElementById("p7.6").checked){
				valid4 = true;
			}
			else if (document.getElementById("p7.7").checked){
				valid4 = true;
			}
			else if (document.getElementById("p7.8").checked){
				valid4 = true;
			}
			
			// Pregunta 15 ------------------------------------
			if (document.getElementById("p8.1").checked){
				valid5 = true;
			}
			else if (document.getElementById("p8.2").checked){
				valid5 = true;
			}
			else if (document.getElementById("p8.3").checked){
				valid5 = true;
			}
			else if (document.getElementById("p8.4").checked){
				valid5 = true;
			}
			else if (document.getElementById("p8.5").checked){
				valid5 = true;
			}
			else if (document.getElementById("p8.6").checked){
				valid5 = true;
			}
			else if (document.getElementById("p8.7").checked){
				valid5 = true;
			}
			else if (document.getElementById("p8.8").checked){
				valid5 = true;
			}
			else if (document.getElementById("p8.9").checked){
				valid5 = true;
			}

			// Pregunta 16 ------------------------------------
			if (document.getElementById("p9.1").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.2").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.3").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.4").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.5").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.6").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.7").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.8").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.9").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.10").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.11").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.12").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.13").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.14").checked){
				valid6 = true;
			}
			else if (document.getElementById("p9.15").checked){
				valid6 = true;
			}

			// Pregunta 21 ------------------------------------
			if (document.getElementById("p14.1").checked){
				valid7 = true;
			}
			else if (document.getElementById("p14.2").checked){
				valid7 = true;
			}
			else if (document.getElementById("p14.3").checked){
				valid7 = true;
			}
			else if (document.getElementById("p14.4").checked){
				valid7 = true;
			}
			else if (document.getElementById("p14.5").checked){
				valid7 = true;
			}
			else if (document.getElementById("p14.6").checked){
				valid7 = true;
			}
			else if (document.getElementById("p14.7").checked){
				valid7 = true;
			}
			else if (document.getElementById("p14.8").checked){
				valid7 = true;
			}
			else if (document.getElementById("p14.9").checked){
				valid7 = true;
			}

			//Pregunta 22 ------------------------------------
			if (document.getElementById("p15.1").checked){
				valid8 = true;
			}
			else if (document.getElementById("p15.2").checked){
				valid8 = true;
			}
			else if (document.getElementById("p15.3").checked){
				valid8 = true;
			}
			else if (document.getElementById("p15.4").checked){
				valid8 = true;
			}
			else if (document.getElementById("p15.5").checked){
				valid8 = true;
			}
			else if (document.getElementById("p15.6").checked){
				valid8 = true;
			}
			else if (document.getElementById("p15.7").checked){
				valid8 = true;
			}
			else if (document.getElementById("p15.8").checked){
				valid8 = true;
			}

			// Check if all questions are answered
			if(valid1 === true && valid2 === true && valid3 === true && valid4 === true && valid5 === true && valid6 === true && valid7 === true && valid8 === true){
				alert("Gracias por contestar la encuesta");
			}
			else{
				alert("Por favor selecciona al menos una respuesta en todas las preguntas");
				return false;
			}
		}
	</script>

</head>

<?php

	$dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "covianalytics4";

	ini_set('display_errors','Off');
	ini_set('error_reporting', E_ALL);
	define('WP_DEBUG', false);
	define('WP_DEBUG_DISPLAY', false);

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

	$sql = "SELECT Pregunta FROM preguntas;";
	$result = $conn->query($sql);
    $preguntas = array();
    
    if ($result->num_rows > 0) {
      // Mostrar resultados
      while($row = $result->fetch_assoc()) {
         array_push($preguntas, $row["Pregunta"]);
      }
    } else {
      echo "Error: No hay pregunta.";
	  $conn->close();
    }
?>

<body>
    <nav>
        <div class="logo"> 
            <h4>Coronanalyst</h4>
        </div>            
    </nav>
	
<div class="encuesta-format">
	<div class="white-space">
	<form action="preguntas.php" method="POST" onsubmit="return validate()"><br>
		
		<div class="list-format">
		<div class="pregunta-list">
			<b><?php echo "1.- " . $preguntas[0]?> </b> <br>
			<SELECT name="genero" id="genero">
			<option value="no">Seleccione uno...</option>
			<option value= "Hombre"> Hombre</option>
			<option value= "Mujer"> Mujer</option>
			<option value= "Otro"> Otro</option>
			
		</SELECT>
		</div>
		<div class="pregunta2-list">
			<b><?php echo "2.- " . $preguntas[1]?> </b> <br>
		
			<SELECT name="edad" id="edad">
			<option value="no">Seleccione uno...</option>
			<option value= "menos de 15 años"> Menos de 15 años</option>
			<option value= "15 - 20 años"> 15 - 20 años</option>
			<option value= "21 - 25 años"> 21 - 25 años</option>
			<option value= "26 - 30 años"> 26 - 30 años</option>
			<option value= "31 - 35 años"> 31 - 35 años</option>
			<option value= "36 - 40 años"> 36 - 40 años</option>
			<option value= "41 - 45 años"> 41 - 45 años</option>
			<option value= "46 - 50 años"> 46 - 50 años</option>
			<option value= "31 - 55 años"> 51 - 55 años</option>
			<option value= "36 - 60 años"> 56 - 60 años</option>
			<option value= "41 - 65 años"> 41 - 65 años</option>
			<option value= "46 - 70 años"> 46 - 70 años</option>
			<option value= "Más de 70"> Más de 70</option>
		</SELECT>
		</div>
		<div class="pregunta-list">
			<b><?php echo "3.- " . $preguntas[2]?> </b> <br>
			<SELECT name="estadoCivil" id="estadoCivil">
			<option value="no">Seleccione uno...</option>
			<option value= "Soltero"> Soltero</option>
			<option value= "Casado"> Casado</option>
			<option value= "Divorciado"> Divorciado</option>
			<option value= "Unión Libre"> Unión Libre</option>
			<option value= "Viudo"> Viudo</option>
			
		</SELECT>
		</div>
		<div class="pregunta2-list">
			<b><?php echo "4.- " . $preguntas[3]?>  </b> <br>
		
			<SELECT name="estudios" id="estudios">
			<option value="no">Seleccione uno...</option>
			<option value= "No aplica"> No aplica</option>
			<option value= "Primaria"> Primaria</option>
			<option value= "Secundaria"> Secundaria</option>
			<option value= "Preparatoria"> Preparatoria</option>
			<option value= "Universidad"> Universidad</option>
			<option value= "Maestría"> Maestría</option>
			<option value= "Doctorado"> Doctorado</option>
			
		</SELECT>
		</div>
		<div class="pregunta-list">
			<b><?php echo "5.- " . $preguntas[4]?>  </b> <br>
		
		<SELECT name="ocupacion" id="ocupacion">
			<option value="no">Seleccione uno...</option>
			<option value= "Sector industrial"> Sector industrial</option>
			<option value= "Sector educativo"> Sector educativo</option>
			<option value= "Sector gubernamental"> Sector gubernamental</option>
			<option value= "Sector de comercio"> Sector de comercio</option>
			<option value= "Sector de transporte"> Sector de transporte</option>
			<option value= "Sector de comida"> Sector de comida</option>
			<option value= "Sector de alojamiento"> Sector de alojamiento</option>
			<option value= "Sector de construcción"> Sector de construcción </option>
			<option value= "Sector de suministro de energía"> Sector de energía</option>
			<option value= "Sector de actividades inmobiliarias"> Sector de actividades inmobiliarias</option>
			<option value= "Sector artístico"> Sector artístico</option>
			<option value= "Sector de pesca y acuicultura"> Sector de pesca y acuicultura</option>
			<option value= "Sector de informática"> Sector de informática</option>
			<option value= "Sector de servicios financieros"> Sector de servicios financieros</option>
			<option value= "Sector judicial"> Sector judicial</option>
			<option value= "Hogar"> Hogar </option>
			<option value= "Estudiante"> Estudiante</option>
			<option value= "Otro"> Otro </option>
			
		</SELECT>
		</div>
		<div class="pregunta2-list">
			<b><?php echo "6.- " . $preguntas[5]?>  </b> <br>
		
			<SELECT name="ingreso" id="ingreso">
			<option value="no">Seleccione uno...</option>
			<option value= "No percibo algún ingreso"> No percibo algún ingreso</option>
			<option value= "Menos de 1,000"> Menos de 1,000</option>
			<option value= "1,000 - 10,000"> 1,000 - 10,000</option>
			<option value= "10,000 - 30,000"> 10,000 - 30,000</option>
			<option value= "30,000 - 50,000"> 30,000 - 50,000</option>
			<option value= "50,000+"> 50,000+</option>
			
		</SELECT>
		</div>
		<div class="pregunta-list">
			<b><?php echo "7.- " . $preguntas[6]?> </b> <br>
			<SELECT name="estado" id="estado">
			<option value="no">Seleccione uno...</option>
			<option value="Aguascalientes">Aguascalientes</option>
			<option value="Baja California">Baja California</option>
			<option value="Baja California Sur">Baja California Sur</option>
			<option value="Campeche">Campeche</option>
			<option value="Chiapas">Chiapas</option>
			<option value="Chihuahua">Chihuahua</option>
			<option value="CDMX">Ciudad de México</option>
			<option value="Coahuila">Coahuila</option>
			<option value="Colima">Colima</option>
			<option value="Durango">Durango</option>
			<option value="Estado de México">Estado de México</option>
			<option value="Guanajuato">Guanajuato</option>
			<option value="Guerrero">Guerrero</option>
			<option value="Hidalgo">Hidalgo</option>
			<option value="Jalisco">Jalisco</option>
			<option value="Michoacán">Michoacán</option>
			<option value="Morelos">Morelos</option>
			<option value="Nayarit">Nayarit</option>
			<option value="Nuevo León">Nuevo León</option>
			<option value="Oaxaca">Oaxaca</option>
			<option value="Puebla">Puebla</option>
			<option value="Querétaro">Querétaro</option>
			<option value="Quintana Roo">Quintana Roo</option>
			<option value="San Luis Potosí">San Luis Potosí</option>
			<option value="Sinaloa">Sinaloa</option>
			<option value="Sonora">Sonora</option>
			<option value="Tabasco">Tabasco</option>
			<option value="Tamaulipas">Tamaulipas</option>
			<option value="Tlaxcala">Tlaxcala</option>
			<option value="Veracruz">Veracruz</option>
			<option value="Yucatán">Yucatán</option>
			<option value="Zacatecas">Zacatecas</option>
		</SELECT>
		</div>
		</div>
		
			
		<div class="pregunta">
			<b><?php echo "8.- " . $preguntas[7]?> </b> <br>
		</div>
		<div class="opcion">
			<label class="text-answer">1 a 5 veces al mes.
			<input type="radio" id="p1" class="opcion" name="p1" value="1 a 5 veces al mes." required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 10 veces al mes.
			<input type="radio" id="p1" class="opcion" name="p1" value="6 a 10 veces al mes." required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Más de 10 veces por mes.
			<input type="radio" id="p1" class="opcion" name="p1" value="Más de 10 veces por mes." required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">1 vez cada varios meses.
			<input type="radio" id="p1" class="opcion" name="p1" value="1 vez cada varios meses." required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizaba compras en línea.
			<input type="radio" id="p1" class="opcion" name="p1" value="No realizaba compras en línea." required><br>
			<span class="checkmark"></span>	
			</label>
		</div>

	
		<div class="pregunta">
			<b><?php echo "9.- " . $preguntas[8]?> </b><br>
		<div class="aviso">
			<b>(Seleccione todos los que necesite)</b>
		</div>
		</div>
		<div class="opcion">
			<label class="text-answer"> Mercado Libre
			<input type="checkbox" id="p2.1" class="opcion" name="p2[ ]" value="MercadoLibre"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Amazon
			<input type="checkbox" id="p2.2" class="opcion" name="p2[ ]" value="Amazon" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Facebook Marketplace
			<input type="checkbox" id="p2.3" class="opcion" name="p2[ ]" value="FacebookMarketplace" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Alibaba / Aliexpress
			<input type="checkbox" id="p2.4" class="opcion" name="p2[ ]" value="Alibaba" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> eBay
			<input type="checkbox" id="p2.5" class="opcion" name="p2[ ]" value="eBay" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">E-shop propia de cada marca (Nike, Supreme, Walmart, Liverpool, etc)
			<input type="checkbox" id="p2.6" class="opcion" name="p2[ ]" value="E-shop" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p2.7" class="opcion" name="p2[ ]" value="Otros" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizaba compras en línea
			<input type="checkbox" id="p2.8" class="opcion" name="p2[ ]" value="No realizaba compras en línea" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>

		<div class="pregunta">
			<b><?php echo "10.- " . $preguntas[9]?> </b> <br>
		<div class="aviso">
			<b>(Seleccione todos los que necesite)</b>
		</div>
		</div>
		<div class="opcion">
			<label class="text-answer"> Tarjeta de crédito
			<input type="checkbox" id="p3.1" class="opcion" name="p3[ ]" value="Tarjeta de crédito"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Tarjeta de débito
			<input type="checkbox" id="p3.2" class="opcion" name="p3[ ]" value="Tarjeta de débito" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Paypal
			<input type="checkbox" id="p3.3" class="opcion" name="p3[ ]" value="Paypal"><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Mercado Pago
			<input type="checkbox" id="p3.4" class="opcion" name="p3[ ]" value="Mercado Pago"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Efectivo
			<input type="checkbox" id="p3.5" class="opcion" name="p3[ ]" value="Efectivo"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Transferencia electrónica
			<input type="checkbox" id="p3.6" class="opcion" name="p3[ ]" value="Transferencia electrónica"><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Depósito en tiendas de conveniencia (Oxxo, 7Eleven, etc.)
			<input type="checkbox" id="p3.7" class="opcion" name="p3[ ]" value="Depósito en tiendas"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p3.8" class="opcion" name="p3[ ]" value="Otros"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizaba compras en línea
			<input type="checkbox" id="p3.9" class="opcion" name="p3[ ]" value="No realizaba compras en línea"><br>
			<span class="checkmark"></span>	
			</label>
		</div>
	

		<div class="pregunta">
			<b><?php echo "11.- " . $preguntas[10]?></b>  <br>
		<div class="aviso">
			<b>(Seleccione todos los que necesite)</b>
		</div>
		</div>
		<div class="opcion">
			<label class="text-answer"> Ropa
			<input type="checkbox" id="p4.1" class="opcion" name="p4[ ]" value="Ropa" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Comida a domicilio (Rappi, UberEats, etc)
			<input type="checkbox" id="p4.2" class="opcion" name="p4[ ]" value="Comida a domicilio" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Super a domicilio (víveres)
			<input type="checkbox" id="p4.3" class="opcion" name="p4[ ]" value="Super a domicilio" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Muebles y/o electrodomésticos
			<input type="checkbox" id="p4.4" class="opcion" name="p4[ ]" value="Muebles y/o electrodomésticos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Coleccionables
			<input type="checkbox" id="p4.5" class="opcion" name="p4[ ]" value="Coleccionables" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Libros (físicos o electrónicos)
			<input type="checkbox" id="p4.6" class="opcion" name="p4[ ]" value="Libros" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Computadoras y/o electrónicos
			<input type="checkbox" id="p4.7" class="opcion" name="p4[ ]" value="Computadoras y/o electrónicos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Herramientas y ferretería
			<input type="checkbox" id="p4.8" class="opcion" name="p4[ ]" value="Herramientas y ferretería" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Entretenimiento (música, tv, videojuegos, juguetes, etc.)
			<input type="checkbox" id="p4.9" class="opcion" name="p4[ ]" value="Entretenimiento" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Programas o aplicaciones
			<input type="checkbox" id="p4.10" class="opcion" name="p4[ ]" value="Programas o aplicaciones" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Reservaciones y boletos
			<input type="checkbox" id="p4.11" class="opcion" name="p4[ ]" value="Reservaciones y boletos" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Artículos de higiene
			<input type="checkbox" id="p4.12" class="opcion" name="p4[ ]" value="Artículos de higiene" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Artículos deportivos
			<input type="checkbox" id="p4.13" class="opcion" name="p4[ ]" value="Artículos deportivos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p4.14" class="opcion" name="p4[ ]" value="Otros" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">No realizaba compras en línea
			<input type="checkbox" id="p4.15" class="opcion" name="p4[ ]" value="No realizaba compras en línea" ><br>
			<span class="checkmark"></span>
			</label>
			
		</div>
		
		<div class="pregunta">
			<b><?php echo "12.- " . $preguntas[11]?> </b> <br>
		</div>
		<div class="opcion">
			<label class="text-answer">7 horas o más al día.
			<input type="radio" id="p5" class="opcion" name="p5" value="7 horas o más al día" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas al día.
			<input type="radio" id="p5" class="opcion" name="p5" value="6 a 2 horas al día" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas a la semana.
			<input type="radio" id="p5" class="opcion" name="p5" value="6 a 2 horas a la semana" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Menos de 2 horas a la semana.
			<input type="radio" id="p5" class="opcion" name="p5" value="Menos de 2 horas a la semana" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		<div class="pregunta">
			<b><?php echo "13.- " . $preguntas[12]?></b> <br>
		</div>
		<div class="opcion">
			<label class="text-answer">Más de 10 veces por mes.
			<input type="radio" id="p6" class="opcion" name="p6" value="Más de 10 veces por mes" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">10 a 6 veces al mes.
			<input type="radio" id="p6" class="opcion" name="p6" value="10 a 6 veces al mes" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">5 a 1 vez por mes.
			<input type="radio" id="p6" class="opcion" name="p6" value="5 a 1 veces al mes" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">1 vez cada varios meses.
			<input type="radio" id="p6" class="opcion" name="p6" value="1 vez cada varios meses" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizo compras en línea.
			<input type="radio" id="p6" class="opcion" name="p6" value="No realizo compras en línea" required><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b><?php echo "14.- " . $preguntas[13]?> </b><br>
		<div class="aviso">
			<b>(Seleccione todos los que necesite)</b>
		</div>
		</div>
		<div class="opcion">
			<label class="text-answer"> Mercado Libre
			<input type="checkbox" id="p7.1" class="opcion" name="p7[ ]" value="Mercado Libre" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Amazon
			<input type="checkbox" id="p7.2" class="opcion" name="p7[ ]" value="Amazon" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Facebook Marketplace
			<input type="checkbox" id="p7.3" class="opcion" name="p7[ ]" value="Facebook Marketplace3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Alibaba / Aliexpress
			<input type="checkbox" id="p7.4" class="opcion" name="p7[ ]" value="Alibaba/Aliexpress" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> eBay
			<input type="checkbox" id="p7.5" class="opcion" name="p7[ ]" value="eBay"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">E-shop propia de cada marca (Nike, Supreme, Walmart, Liverpool, etc)
			<input type="checkbox" id="p7.6" class="opcion" name="p7[ ]" value="E-shop" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p7.7" class="opcion" name="p7[ ]" value="Otros" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizo compras en línea
			<input type="checkbox" id="p7.8" class="opcion" name="p7[ ]" value="No realizo compras en línea" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
	
		<div class="pregunta">
			<b><?php echo "15.- " . $preguntas[14]?> </b> <br>
		<div class="aviso">
			<b>(Seleccione todos los que necesite)</b>
		</div>
		</div>
		<div class="opcion">
			<label class="text-answer"> Tarjeta de crédito
			<input type="checkbox" id="p8.1" class="opcion" name="p8[ ]" value="Tarjeta de crédito" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Tarjeta de débito
			<input type="checkbox" id="p8.2" class="opcion" name="p8[ ]" value="Tarjeta de débito" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Paypal
			<input type="checkbox" id="p8.3" class="opcion" name="p8[ ]" value="Paypal" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Mercado Pago
			<input type="checkbox" id="p8.4" class="opcion" name="p8[ ]" value="Mercado Pago" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Efectivo
			<input type="checkbox" id="p8.5" class="opcion" name="p8[ ]" value="Efectivo" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Transferencia electrónica
			<input type="checkbox" id="p8.6" class="opcion" name="p8[ ]" value="Transferencia electrónica" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Depósito en tiendas de conveniencia (Oxxo, 7Eleven, etc.)
			<input type="checkbox" id="p8.7" class="opcion" name="p8[ ]" value="Depósito en tiendas" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p8.8" class="opcion" name="p8[ ]" value="Otros" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizo compras en línea
			<input type="checkbox" id="p8.9" class="opcion" name="p8[ ]" value="No realizo compras en línea" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b><?php echo "16.- " . $preguntas[15]?></b>  <br>
		<div class="aviso">
			<b>(Seleccione todos los que necesite)</b>
		</div>
		</div>
		<div class="opcion">
			<label class="text-answer"> Ropa
			<input type="checkbox" id="p9.1" class="opcion" name="p9[ ]" value="Ropa" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Comida a domicilio (Rappi, UberEats, etc)
			<input type="checkbox" id="p9.2" class="opcion" name="p9[ ]" value="Comida a domicilio" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Super a domicilio (víveres)
			<input type="checkbox" id="p9.3" class="opcion" name="p9[ ]" value="Super a domicilio" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Muebles y/o electrodomésticos
			<input type="checkbox" id="p9.4" class="opcion" name="p9[ ]" value="Muebles y/o electrodomésticos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Coleccionables
			<input type="checkbox" id="p9.5" class="opcion" name="p9[ ]" value="Coleccionables" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Libros (físicos o electrónicos)
			<input type="checkbox" id="p9.6" class="opcion" name="p9[ ]" value="Libros" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Computadoras y/o electrónicos
			<input type="checkbox" id="p9.7" class="opcion" name="p9[ ]" value="Computadoras y/o electrónicos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Herramientas y ferretería
			<input type="checkbox" id="p9.8" class="opcion" name="p9[ ]" value="Herramientas y ferretería" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Entretenimiento (música, tv, videojuegos, juguetes, etc.)
			<input type="checkbox" id="p9.9" class="opcion" name="p9[ ]" value="Entretenimiento" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Programas o aplicaciones
			<input type="checkbox" id="p9.10" class="opcion" name="p9[ ]" value="Programas o aplicaciones" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Reservaciones y boletos
			<input type="checkbox" id="p9.11" class="opcion" name="p9[ ]" value="Reservaciones y boletos" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Artículos de higiene
			<input type="checkbox" id="p9.12" class="opcion" name="p9[ ]" value="Artículos de higiene" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Artículos deportivos
			<input type="checkbox" id="p9.13" class="opcion" name="p9[ ]" value="Artículos deportivos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p9.14" class="opcion" name="p9[ ]" value="Otros" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Sigo sin realizar compras en línea
			<input type="checkbox" id="p9.15" class="opcion" name="p9[ ]" value="Sigo sin realizar compras en línea" ><br>
			<span class="checkmark"></span>
			</label>
		</div>
		<div class="pregunta">
			<b><?php echo "17.- " . $preguntas[16]?> </b> <br>
		
		</div>
		<div class="opcion">
			<label class="text-answer">7 horas o más al día.
			<input type="radio" id="p10" class="opcion" name="p10" value="7 horas o más al día" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas al día.
			<input type="radio" id="p10" class="opcion" name="p10" value="6 a 2 horas al día" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas a la semana.
			<input type="radio" id="p10" class="opcion" name="p10" value="6 a 2 horas a la semana" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Menos de 2 horas a la semana.
			<input type="radio" id="p10" class="opcion" name="p10" value="Menos de 2 horas a la semana" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		
		<div class="pregunta">
			<b><?php echo "18.- " . $preguntas[17]?> </b> <br>
		</div>
		<div class="opcion">
			<label class="text-answer">Menos de 1,000
			<input type="radio" id="p11" class="opcion" name="p11" value="Menos de 1,000" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">1,000 - 2,500
			<input type="radio" id="p11" class="opcion" name="p11" value="1,000 - 2,500" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">2,500 - 5,000
			<input type="radio" id="p11" class="opcion" name="p11" value="2,500 - 5,000" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">5,000 - 7,500
			<input type="radio" id="p11" class="opcion" name="p11" value="5,000 - 7,500" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">7,500 - 10,000
			<input type="radio" id="p11" class="opcion" name="p11" value="7,500 - 10,000" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">	Más de 10,000
			<input type="radio" id="p11" class="opcion" name="p11" value="Más de 10,000" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		
		<div class="pregunta">
			<b><?php echo "19.- " . $preguntas[18]?> </b> <br>
		</div>
		<div class="opcion">
			<label class="text-answer">Físico.
			<input type="radio" id="p12" class="opcion" name="p12" value="Físico" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Línea.
			<input type="radio" id="p12" class="opcion" name="p12" value="Línea" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		
		<div class="pregunta">
			<b><?php echo "20.- " . $preguntas[19]?>  </b> <br>
		</div>
		<div class="opcion">
			<label class="text-answer">Sí
			<input type="radio" id="p13" class="opcion" name="p13" value="Sí" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No
			<input type="radio" id="p13" class="opcion" name="p13" value="No" required><br>
			<span class="checkmark"></span>
			</label>
		</div>

		<!-- Solo lee las primeras dos opcion y la segunda la pone mal -->
		<div class="pregunta">
			<b><?php echo "21.- " . $preguntas[20]?> </b> <br>
		<div class="aviso">
			<b>(Seleccione todos los que necesite)</b>
		</div>
		</div>
		<div class="opcion">
			<label class="text-answer">Diabetes
			<input type="checkbox" id="p14.1" class="opcion" name="p14[ ]" value="Diabetes" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Hipertensión
			<input type="checkbox" id="p14.2" class="opcion" name="p14[ ]" value="Hipertensión" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Obesidad
			<input type="checkbox" id="p14.3" class="opcion" name="p14[ ]" value="Obesidad" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Asma
			<input type="checkbox" id="p14.4" class="opcion" name="p14[ ]" value="Asma" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Condiciones cardiacas
			<input type="checkbox" id="p14.5" class="opcion" name="p14[ ]" value="Condiciones cardiacas" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Inmunodeficiencia
			<input type="checkbox" id="p14.6" class="opcion" name="p14[ ]" value="Inmunodeficiencia" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Hepatitis
			<input type="checkbox" id="p14.7" class="opcion" name="p14[ ]" value="Hepatitis" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros no listados
			<input type="checkbox" id="p14.8" class="opcion" name="p14[ ]" value="Otros no listados" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Ninguna
			<input type="checkbox" id="p14.9" class="opcion" name="p14[ ]" value="Ninguna" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b><?php echo "22.- " . $preguntas[21]?> </b> <br>
		<div class="aviso">
			<b>(Seleccione todos los que necesite)</b>
		</div>
		</div>
		<div class="opcion">
			<label class="text-answer">Ansiedad
			<input type="checkbox" id="p15.1" class="opcion" name="p15[ ]" value="Ansiedad" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Estrés
			<input type="checkbox" id="p15.2" class="opcion" name="p15[ ]" value="Estrés" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Depresión
			<input type="checkbox" id="p15.3" class="opcion" name="p15[ ]" value="Depresión" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Déficit de atención
			<input type="checkbox" id="p15.4" class="opcion" name="p15[ ]" value="Déficit de atención" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Baja de rendimiento laboral/académico
			<input type="checkbox" id="p15.5" class="opcion" name="p15[ ]" value="Baja de rendimiento laboral/académico" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Baja autoestima
			<input type="checkbox" id="p15.6" class="opcion" name="p15[ ]" value="Baja autoestima" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Otros no listados
			<input type="checkbox" id="p15.7" class="opcion" name="p15[ ]" value="Otros no listados" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Ninguna
			<input type="checkbox" id="p15.8" class="opciones" name="p15[ ]" value="Ninguna" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b><?php echo "23.- " . $preguntas[22]?>  </b> <br>
		</div>
		<div class="opcion">
			<label class="text-answer">Aumentó.
			<input type="radio" id="p16" class="opcion" name="p16" value="Aumentó" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Permaneció igual que antes.
			<input type="radio" id="p16" class="opcion" name="p16" value="Permaneció igual que antes" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Disminuyó.
			<input type="radio" id="p16" class="opcion" name="p16" value="Disminuyó" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
	</div>

<br><br><br><br>
	<div class="posenc">
		
			<input type="submit"  value="Submit" name="Submit" >
		</form>
	</div>
</div>

    <script src="app.js"></script>
    
</body>
</html>
