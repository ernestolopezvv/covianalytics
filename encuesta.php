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
	<form action="login.php" input type="submit"  value="Encuesta" ><br>
		
		<div class="list-format">
		<div class="pregunta">
			<b>Genero  </b> <br>
		</div>
		<div class="opciones">
			<SELECT name="genero" id="genero">
			<option value="no">Seleccione uno...</option>
			<option value= "Hombre"> Hombre</option>
			<option value= "Mujer"> Mujer</option>
			<option value= "Otro"> Otro</option>
			
		</SELECT>
		</div>
		<div class="pregunta">
			<b>Edad  </b> <br>
		</div>
		<div class="opciones">
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
		<div class="pregunta">
			<b>Estado Civil  </b> <br>
		</div>
		<div class="opciones">
			<SELECT name="Estado Civil" id="estadoCivil">
			<option value="no">Seleccione uno...</option>
			<option value= "Soltero"> Soltero</option>
			<option value= "Casado"> Casado</option>
			<option value= "Divorciado"> Divorciado</option>
			<option value= "Unión Libre"> Unión Libre</option>
			<option value= "Viudo"> Viudo</option>
			
		</SELECT>
		</div>
		<div class="pregunta">
			<b>Nivel máximo de estudios  </b> <br>
		</div>
		<div class="opciones">
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
		<div class="pregunta">
			<b>Ocupación  </b> <br>
		</div>
		<div class="opciones">
		<SELECT name="ocupación" id="ocupación">
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
		<div class="pregunta">
			<b>Ingreso económico mensual  </b> <br>
		</div>
		<div class="opciones">
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
		<div class="pregunta">
			<b>Estado  </b> <br>
		</div>
		<div class="opciones">
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
			<b>1. ¿Qué tan seguido compraba en línea?</b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">1 a 5 veces al mes.
			<input type="radio" id="p1" class="opciones" name="p1" value="1 a 5 veces al mes." required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 10 veces al mes.
			<input type="radio" id="p1" class="opciones" name="p1" value="6 a 10 veces al mes." required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Más de 10 veces por mes.
			<input type="radio" id="p1" class="opciones" name="p1" value="Más de 10 veces por mes." required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">1 vez cada varios meses.
			<input type="radio" id="p1" class="opciones" name="p1" value="1 vez cada varios meses." required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizaba compras en línea.
			<input type="radio" id="p1" class="opciones" name="p1" value="No realizaba compras en línea." required><br>
			<span class="checkmark"></span>	
			</label>
		</div>

	
		<div class="pregunta">
			<b>2. ¿Qué plataformas utilizaba para realizar compras en línea? </b><br>
		</div>
		<div class="opciones">
			<label class="text-answer"> Mercado Libre
			<input type="checkbox" id="p2" class="opciones" name="p2" value="MercadoLibre"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Amazon
			<input type="checkbox" id="p2" class="opciones" name="p2" value="Amazon" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Facebook Marketplace
			<input type="checkbox" id="p2" class="opciones" name="p2" value="FacebookMarketplace" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Alibaba / Aliexpress
			<input type="checkbox" id="p2" class="opciones" name="p2" value="Alibaba" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> eBay
			<input type="checkbox" id="p2" class="opciones" name="p2" value="eBay" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">E-shop propia de cada marca (Nike, Supreme, Walmart, Liverpool, etc)
			<input type="checkbox" id="p2" class="opciones" name="p2" value="E-shop" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p2" class="opciones" name="p2" value="Otros" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizaba compras en línea
			<input type="checkbox" id="p2" class="opciones" name="p2" value="No realizaba compras en línea" ><br>
			<span class="checkmark"></span>	
			</label>
			
		</div>
		<div class="pregunta">
			<b>3. ¿Qué métodos de pago utilizaba más para realizar sus compras en línea? </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer"> Tarjeta de crédito
			<input type="checkbox" id="p3" class="opciones" name="p3" value="Tarjeta de crédito"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Tarjeta de débito
			<input type="checkbox" id="p3" class="opciones" name="p3" value="Tarjeta de débito" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Paypal
			<input type="checkbox" id="p3" class="opciones" name="p3" value="Paypal"><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Mercado Pago
			<input type="checkbox" id="p3" class="opciones" name="p3" value="Mercado Pago"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Efectivo
			<input type="checkbox" id="p3" class="opciones" name="p3" value="Efectivo"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Transferencia electrónica
			<input type="checkbox" id="p3" class="opciones" name="p3" value="Transferencia electrónica"><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Depósito en tiendas de conveniencia (Oxxo, 7Eleven, etc.)
			<input type="checkbox" id="p3" class="opciones" name="p3" value="Depósito en tiendas"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p3" class="opciones" name="p3" value="Otros"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizaba compras en línea
			<input type="checkbox" id="p3" class="opciones" name="p3" value="No realizaba compras en línea"><br>
			<span class="checkmark"></span>	
			</label>
		</div>
	


		<div class="pregunta">
			<b>4. ¿De cuáles de las siguientes categorías realizaba compras?</b>  <br>
		</div>
		<div class="opciones">
			<label class="text-answer"> Ropa
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Ropa" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Comida a domicilio (Rappi, UberEats, etc)
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Comida a domicilio" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Super a domicilio (víveres)
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Super a domicilio" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Muebles y/o electrodomésticos
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Muebles y/o electrodomésticos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Coleccionables
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Coleccionables" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Libros (físicos o electrónicos)
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Libros" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Computadoras y/o electrónicos
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Computadoras y/o electrónicos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Herramientas y ferretería
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Herramientas y ferretería" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Entretenimiento (música, tv, videojuegos, juguetes, etc.)
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Entretenimiento" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Programas o aplicaciones
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Programas o aplicaciones" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Reservaciones y boletos
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Reservaciones y boletos" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Artículos de higiene
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Artículos de higiene" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Artículos deportivos
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Artículos deportivos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p4" class="opciones" name="p4" value="Otros" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">No realizaba compras en línea
			<input type="checkbox" id="p4" class="opciones" name="p4" value="No realizaba compras en línea" ><br>
			<span class="checkmark"></span>
			</label>
			
		</div>
		
		<div class="pregunta">
			<b>5. ¿Cuánto tiempo estima que se encontraba usando la computadora para actividades diarias? </b> <br>
		</div>
		<div class="opciones"><br>
			<label class="text-answer">7 horas o más al día.
			<input type="radio" id="p5" class="opciones" name="p5" value="7 horas o más al día" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas al día.
			<input type="radio" id="p5" class="opciones" name="p5" value="6 a 2 horas al día" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas a la semana.
			<input type="radio" id="p5" class="opciones" name="p5" value="6 a 2 horas a la semana" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Menos de 2 horas a la semana.
			<input type="radio" id="p5" class="opciones" name="p5" value="Menos de 2 horas a la semana" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		<div class="pregunta">
			<b>6. ¿Qué tan seguido compra en línea ahora?</b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">Más de 10 veces por mes.
			<input type="radio" id="p6" class="opciones" name="p6" value="Más de 10 veces por mes" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">10 a 6 veces al mes.
			<input type="radio" id="p6" class="opciones" name="p6" value="10 a 6 veces al mes" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">5 a 1 vez por mes.
			<input type="radio" id="p6" class="opciones" name="p6" value="5 a 1 veces al mes" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">1 vez cada varios meses.
			<input type="radio" id="p6" class="opciones" name="p6" value="1 vez cada varios meses" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizo compras en línea.
			<input type="radio" id="p6" class="opciones" name="p6" value="No realizo compras en línea" required><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b>7. ¿Qué plataformas utiliza para realizar compras en línea? </b><br>
		</div>
		<div class="opciones">
			<label class="text-answer"> Mercado Libre
			<input type="checkbox" id="p7" class="opciones" name="p7" value="Mercado Libre" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Amazon
			<input type="checkbox" id="p7" class="opciones" name="p7" value="Amazon" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Facebook Marketplace
			<input type="checkbox" id="p7" class="opciones" name="p7" value="Facebook Marketplace3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Alibaba / Aliexpress
			<input type="checkbox" id="p7" class="opciones" name="p7" value="Alibaba/Aliexpress" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> eBay
			<input type="checkbox" id="p7" class="opciones" name="p7" value="eBay"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">E-shop propia de cada marca (Nike, Supreme, Walmart, Liverpool, etc)
			<input type="checkbox" id="p7" class="opciones" name="p7" value="E-shop" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p7" class="opciones" name="p7" value="Otros" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizo compras en línea
			<input type="checkbox" id="p7" class="opciones" name="p7" value="No realizo compras en línea" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
	
		<div class="pregunta">
			<b>8. ¿Qué métodos de pago utiliza usted para sus compras en línea? </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer"> Tarjeta de crédito
			<input type="checkbox" id="p8" class="opciones" name="p8" value="Tarjeta de crédito" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Tarjeta de débito
			<input type="checkbox" id="p8" class="opciones" name="p8" value="Tarjeta de débito" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Paypal
			<input type="checkbox" id="p8" class="opciones" name="p8" value="Paypal" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Mercado Pago
			<input type="checkbox" id="p8" class="opciones" name="p8" value="Mercado Pago" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Efectivo
			<input type="checkbox" id="p8" class="opciones" name="p8" value="Efectivo" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Transferencia electrónica
			<input type="checkbox" id="p8" class="opciones" name="p8" value="Transferencia electrónica" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Depósito en tiendas de conveniencia (Oxxo, 7Eleven, etc.)
			<input type="checkbox" id="p8" class="opciones" name="p8" value="Depósito en tiendas" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p8" class="opciones" name="p8" value="Otros" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizo compras en línea
			<input type="checkbox" id="p8" class="opciones" name="p8" value="No realizo compras en línea" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b>9. ¿De cuáles de las siguientes categorías ha realizado compras?</b>  <br>
		</div>
		<div class="opciones">
			<label class="text-answer"> Ropa
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Ropa" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Comida a domicilio (Rappi, UberEats, etc)
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Comida a domicilio" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Super a domicilio (víveres)
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Super a domicilio" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Muebles y/o electrodomésticos
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Muebles y/o electrodomésticos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Coleccionables
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Coleccionables" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Libros (físicos o electrónicos)
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Libros" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Computadoras y/o electrónicos
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Computadoras y/o electrónicos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Herramientas y ferretería
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Herramientas y ferretería" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Entretenimiento (música, tv, videojuegos, juguetes, etc.)
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Entretenimiento" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Programas o aplicaciones
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Programas o aplicaciones" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Reservaciones y boletos
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Reservaciones y boletos" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Artículos de higiene
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Artículos de higiene" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Artículos deportivos
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Artículos deportivos" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Otros" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Sigo sin realizar compras en línea
			<input type="checkbox" id="p9" class="opciones" name="p9" value="Sigo sin realizar compras en línea" ><br>
			<span class="checkmark"></span>
			</label>
		</div>
		<div class="pregunta">
			<b>10. ¿Cuánto tiempo estima usa la computadora para actividades diarias? </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">7 horas o más al día.
			<input type="radio" id="p10" class="opciones" name="p10" value="7 horas o más al día" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas al día.
			<input type="radio" id="p10" class="opciones" name="p10" value="6 a 2 horas al día" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas a la semana.
			<input type="radio" id="p10" class="opciones" name="p10" value="6 a 2 horas a la semana" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Menos de 2 horas a la semana.
			<input type="radio" id="p10" class="opciones" name="p10" value="Menos de 2 horas a la semana" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		
		<div class="pregunta">
			<b>11. ¿En promedio cuánto dinero estima que gasta en compras en línea al mes? </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">Menos de 1,000
			<input type="radio" id="p11" class="opciones" name="p11" value="Menos de 1,000" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">1,000 - 2,500
			<input type="radio" id="p11" class="opciones" name="p11" value="1,000 - 2,500" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">2,500 - 5,000
			<input type="radio" id="p11" class="opciones" name="p11" value="2,500 - 5,000" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">5,000 - 7,500
			<input type="radio" id="p11" class="opciones" name="p11" value="5,000 - 7,500" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">7,500 - 10,000
			<input type="radio" id="p11" class="opciones" name="p11" value="7,500 - 10,000" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">	Más de 10,000
			<input type="radio" id="p11" class="opciones" name="p11" value="Más de 10,000" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		
		<div class="pregunta">
			<b>12. ¿Actualmente compra más seguido en físico o en línea? </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">Físico.
			<input type="radio" id="p12" class="opciones" name="p12" value="Físico" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Línea.
			<input type="radio" id="p12" class="opciones" name="p12" value="Línea" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		
		<div class="pregunta">
			<b>13. Desde que empezó la pandemia, ¿ha presentado síntomas relacionados al COVID-19?  </b> <br>
		</div>
		<div class="opciones"><br>
			<label class="text-answer">Sí
			<input type="radio" id="p13" class="opciones" name="p13" value="Sí" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No
			<input type="radio" id="p13" class="opciones" name="p13" value="No" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		
		<div class="pregunta">
			<b>14. ¿Usted sufre de alguna de las siguientes condiciones médicas? </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">Diabetes
			<input type="checkbox" id="p14" class="opciones" name="p14" value="Diabetes" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Hipertensión
			<input type="checkbox" id="p14" class="opciones" name="p14" value="Hipertensión" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Obesidad
			<input type="checkbox" id="p14" class="opciones" name="p14" value="Obesidad" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Asma
			<input type="checkbox" id="p14" class="opciones" name="p14" value="Asma" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Condiciones cardíacas
			<input type="checkbox" id="p14" class="opciones" name="p14" value="Condiciones cardíacas ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Inmunodeficiencia
			<input type="checkbox" id="p14" class="opciones" name="p14" value="Inmunodeficiencia" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Hepatitis
			<input type="checkbox" id="p14" class="opciones" name="p14" value="Hepatitis" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros no listados
			<input type="checkbox" id="p14" class="opciones" name="p14" value="Otros no listados" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Ninguna
			<input type="checkbox" id="p14" class="opciones" name="p14" value="Ninguna" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b>15. ¿A causa de la pandemia usted se ha sentido relacionado con algunas de las siguientes situaciones? </b> <br>
		</div>
		<div class="opciones">
		<br>
			<label class="text-answer">Ansiedad
			<input type="checkbox" id="p15" class="opciones" name="p15" value="Ansiedad" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Estrés
			<input type="checkbox" id="p15" class="opciones" name="p15" value="Estrés" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Depresión
			<input type="checkbox" id="p15" class="opciones" name="p15" value="Depresión" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Déficit de atención
			<input type="checkbox" id="p15" class="opciones" name="p15" value="Déficit de atención" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Baja de rendimiento laboral/académico
			<input type="checkbox" id="p15" class="opciones" name="p15" value="Baja de rendimiento laboral/académico" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Baja autoestima
			<input type="checkbox" id="p15" class="opciones" name="p15" value="Baja autoestima" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Otros no listados
			<input type="checkbox" id="p15" class="opciones" name="p15" value="Otros no listados" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Ninguna
			<input type="checkbox" id="p15" class="opciones" name="p15" value="Ninguna" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b>16. Durante la pandemia ¿Cómo ha cambiado su actividad física?  </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">Aumentó.
			<input type="radio" id="p16" class="opciones" name="p16" value="Aumentó" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Permaneció igual que antes.
			<input type="radio" id="p16" class="opciones" name="p16" value="Permaneció igual que antes" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Disminuyó.
			<input type="radio" id="p16" class="opciones" name="p16" value="Disminuyó" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
</div>
<br><br><br><br>
	<div class="posenc">
		
			<input type="submit"  value="Finalizar">
		</form>
	</div>

    <script src="app.js"></script>
    
</body>
</html>
