<!--<!DOCTYPE html>-->
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
	
	
	<div class="format-index">
		<form action="login.php" method="POST">
			<br><h2>Introduce tu email</h2>
			<input type="email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" 
			placeholder="&#128273;user@example.com" name="email" required>
			<br> <br>
			<input type="submit" value="Ingresar" name="submit"> <br> <br>
			<input type="checkbox" name="term" value= "acepta" required>
			Acepto los <a href="terminos.html">términos y condiciones.</a>
			<br><br>
		</form>
	</div>
	<div class="message">
	<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "covianalytics";

	ini_set('display_errors','Off');
	ini_set('error_reporting', E_ALL );
	define('WP_DEBUG', false);
	define('WP_DEBUG_DISPLAY', false);

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	
    $email = $_POST["email"];

    if(!empty($email)){
        if(mysqli_connect_error()){
            die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
        } else{
            $SELECT = "SELECT email FROM usuario WHERE email = ? Limit 1";
            $INSERT = "INSERT INTO usuario (email) VALUES (?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum == 0){
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                echo "New record inserted sucessfully";
				header ("Location: contactanos.html");
            }else
                echo "Someone is using this email already";
				
				/*echo"<script>alert('Someone is using this email already')</script>";*/
        }
        $stmt->close();
        $conn->close();
    } 
?>
	</div>
	<img src="img/pklogo.png" class="img-logo" />
	<img src="img/teclogo.png" class="img-logo" />
	
    <script src="app.js"></script>
    
</body>
</html>
