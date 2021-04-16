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
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Super a domicilio (víveres)
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Muebles y/o electrodomésticos
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Coleccionables
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Libros (físicos o electrónicos)
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Computadoras y/o electrónicos
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Herramientas y ferretería
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Entretenimiento (música, tv, videojuegos, juguetes, etc.)
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Programas o aplicaciones
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Reservaciones y boletos
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Artículos de higiene
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Artículos deportivos
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">No realizaba compras en línea
			<input type="checkbox" id="p4" class="opciones" name="p4" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
			
		</div>
		
		<div class="pregunta">
			<b>5. ¿Cuánto tiempo estima que se encontraba usando la computadora para actividades diarias? </b> <br>
		</div>
		<div class="opciones"><br>
			<label class="text-answer">7 horas o más al día.
			<input type="radio" id="p5" class="opciones" name="p5" value="p1-1" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas al día.
			<input type="radio" id="p5" class="opciones" name="p5" value="p1-2" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas a la semana.
			<input type="radio" id="p5" class="opciones" name="p5" value="p1-3" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Menos de 2 horas a la semana.
			<input type="radio" id="p5" class="opciones" name="p5" value="p1-4" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		<br><hr><br>
		
		<div class="pregunta">
			<b>6. ¿Qué tan seguido compra en línea ahora?</b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">1 a 5 veces al mes.
			<input type="radio" id="p6" class="opciones" name="p6" value="p1-1" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 10 veces al mes.
			<input type="radio" id="p6" class="opciones" name="p6" value="p1-2" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Más de 10 veces por mes.
			<input type="radio" id="p6" class="opciones" name="p6" value="p1-3" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">1 vez cada varios meses.
			<input type="radio" id="p6" class="opciones" name="p6" value="p1-4" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizo compras en línea.
			<input type="radio" id="p6" class="opciones" name="p6" value="p1-5" required><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b>7. ¿Qué plataformas utiliza para realizar compras en línea? </b><br>
		</div>
		<div class="opciones">
			<label class="text-answer"> Mercado Libre
			<input type="checkbox" id="p7" class="opciones" name="p7" value="p2-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Amazon
			<input type="checkbox" id="p7" class="opciones" name="p7" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Facebook Marketplace
			<input type="checkbox" id="p7" class="opciones" name="p7" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Alibaba / Aliexpress
			<input type="checkbox" id="p7" class="opciones" name="p7" value="p2-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> eBay
			<input type="checkbox" id="p7" class="opciones" name="p7" value="p5-4"><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">E-shop propia de cada marca (Nike, Supreme, Walmart, Liverpool, etc)
			<input type="checkbox" id="p7" class="opciones" name="p7" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p7" class="opciones" name="p7" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizo compras en línea
			<input type="checkbox" id="p7" class="opciones" name="p7" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
	
		<div class="pregunta">
			<b>8. ¿Qué métodos de pago utiliza usted para sus compras en línea? </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer"> Tarjeta de crédito
			<input type="checkbox" id="p8" class="opciones" name="p8" value="p2-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Tarjeta de débito
			<input type="checkbox" id="p8" class="opciones" name="p8" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Paypal
			<input type="checkbox" id="p8" class="opciones" name="p8" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Mercado Pago
			<input type="checkbox" id="p8" class="opciones" name="p8" value="p2-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Efectivo
			<input type="checkbox" id="p8" class="opciones" name="p8" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Transferencia electrónica
			<input type="checkbox" id="p8" class="opciones" name="p8" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Depósito en tiendas de conveniencia (Oxxo, 7Eleven, etc.)
			<input type="checkbox" id="p8" class="opciones" name="p8" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p8" class="opciones" name="p8" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No realizo compras en línea
			<input type="checkbox" id="p8" class="opciones" name="p8" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b>9. ¿De cuáles de las siguientes categorías ha realizado compras?</b>  <br>
		</div>
		<div class="opciones">
			<label class="text-answer"> Ropa
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Comida a domicilio (Rappi, UberEats, etc)
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Super a domicilio (víveres)
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Muebles y/o electrodomésticos
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Coleccionables
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Libros (físicos o electrónicos)
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Computadoras y/o electrónicos
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Herramientas y ferretería
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Entretenimiento (música, tv, videojuegos, juguetes, etc.)
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Programas o aplicaciones
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Reservaciones y boletos
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Artículos de higiene
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Artículos deportivos
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Sigo sin realizar compras en línea
			<input type="checkbox" id="p9" class="opciones" name="p9" value="p4-4" ><br>
			<span class="checkmark"></span>
			</label>
		</div>
		<div class="pregunta">
			<b>10. ¿Cuánto tiempo estima usa la computadora para actividades diarias? </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">7 horas o más al día.
			<input type="radio" id="p10" class="opciones" name="p10" value="p1-1" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas al día.
			<input type="radio" id="p10" class="opciones" name="p10" value="p1-2" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">6 a 2 horas a la semana.
			<input type="radio" id="p10" class="opciones" name="p10" value="p1-3" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Menos de 2 horas a la semana.
			<input type="radio" id="p10" class="opciones" name="p10" value="p1-4" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		
		<div class="pregunta">
			<b>11. ¿En promedio cuánto dinero estima que gasta en compras en línea al mes? </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">Menos de 1,000
			<input type="radio" id="p11" class="opciones" name="p11" value="p1-1" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">1,000 - 2,500
			<input type="radio" id="p11" class="opciones" name="p11" value="p1-2" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">2,500 - 5,000
			<input type="radio" id="p11" class="opciones" name="p11" value="p1-3" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">5,000 - 7,500
			<input type="radio" id="p11" class="opciones" name="p11" value="p1-4" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">7,500 - 10,000
			<input type="radio" id="p11" class="opciones" name="p11" value="p1-3" required><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">	Más de 10,000
			<input type="radio" id="p11" class="opciones" name="p11" value="p1-4" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		
		<div class="pregunta">
			<b>12. ¿Actualmente compra más seguido en físico o en línea? </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">Físico.
			<input type="radio" id="p12" class="opciones" name="p12" value="p1-1" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Línea.
			<input type="radio" id="p12" class="opciones" name="p12" value="p1-2" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		
		<br><hr><br>
		
		<div class="pregunta">
			<b>13. Desde que empezó la pandemia, ¿ha presentado síntomas relacionados al COVID-19?  </b> <br>
		</div>
		<div class="opciones"><br>
			<label class="text-answer">Sí
			<input type="radio" id="p13" class="opciones" name="p13" value="p1-1" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">No
			<input type="radio" id="p13" class="opciones" name="p13" value="p1-2" required><br>
			<span class="checkmark"></span>
			</label>
		</div>
		
		<div class="pregunta">
			<b>14. ¿Usted sufre de alguna de las siguientes condiciones médicas? </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">Diabetes
			<input type="checkbox" id="p14" class="opciones" name="p14" value="p2-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Hipertensión
			<input type="checkbox" id="p14" class="opciones" name="p14" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Obesidad
			<input type="checkbox" id="p14" class="opciones" name="p14" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Asma
			<input type="checkbox" id="p14" class="opciones" name="p14" value="p2-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Condiciones cardíacas
			<input type="checkbox" id="p14" class="opciones" name="p14" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Inmunodeficiencia
			<input type="checkbox" id="p14" class="opciones" name="p14" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Hepatitis
			<input type="checkbox" id="p14" class="opciones" name="p14" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros no listados
			<input type="checkbox" id="p14" class="opciones" name="p14" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Ninguna
			<input type="checkbox" id="p14" class="opciones" name="p14" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>

		<div class="pregunta">
			<b>15. ¿A causa de la pandemia usted se ha sentido relacionado con algunas de las siguientes situaciones? </b> <br>
		</div>
		<div class="opciones">
		<br>
			<label class="text-answer">Diabetes
			<input type="checkbox" id="p15" class="opciones" name="p15" value="p2-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Hipertensión
			<input type="checkbox" id="p15" class="opciones" name="p15" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Obesidad
			<input type="checkbox" id="p15" class="opciones" name="p15" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Asma
			<input type="checkbox" id="p15" class="opciones" name="p15" value="p2-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Condiciones cardíacas
			<input type="checkbox" id="p15" class="opciones" name="p15" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Inmunodeficiencia
			<input type="checkbox" id="p15" class="opciones" name="p15" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Hepatitis
			<input type="checkbox" id="p15" class="opciones" name="p15" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Otros no listados
			<input type="checkbox" id="p15" class="opciones" name="p15" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Ninguna
			<input type="checkbox" id="p15" class="opciones" name="p15" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b>16. ¿A causa de la pandemia usted se ha sentido relacionado con algunas de las siguientes situaciones? </b> <br>
		</div>
		<div class="opciones">
		<br>
			<label class="text-answer">Ansiedad
			<input type="checkbox" id="p16" class="opciones" name="p16" value="p2-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Estrés
			<input type="checkbox" id="p16" class="opciones" name="p16" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Depresión
			<input type="checkbox" id="p16" class="opciones" name="p16" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer"> Déficit de atención
			<input type="checkbox" id="p16" class="opciones" name="p16" value="p2-1" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Baja de rendimiento laboral/académico
			<input type="checkbox" id="p16" class="opciones" name="p16" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer"> Baja autoestima
			<input type="checkbox" id="p16" class="opciones" name="p16" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
			<label class="text-answer">Otros no listados
			<input type="checkbox" id="p16" class="opciones" name="p16" value="p5-4" ><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Ninguna
			<input type="checkbox" id="p16" class="opciones" name="p16" value="p5-3" ><br>
			<span class="checkmark"></span>	
			</label>
		</div>
		
		<div class="pregunta">
			<b>17. Durante la pandemia ¿Cómo ha cambiado su actividad física?  </b> <br>
		</div>
		<div class="opciones">
			<label class="text-answer">Aumentó.
			<input type="radio" id="p17" class="opciones" name="p17" value="p1-1" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Permaneció igual que antes.
			<input type="radio" id="p17" class="opciones" name="p17" value="p1-1" required><br>
			<span class="checkmark"></span>
			</label>
			<label class="text-answer">Disminuyó.
			<input type="radio" id="p17" class="opciones" name="p17" value="p1-2" required><br>
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
