<?php

session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "covianalytics4";



$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($conn->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}

if(isset($_POST['Submit']))
{	 
   // User data post variables
	 $genero = $_POST['genero'];
	 $edad = $_POST['edad'];
	 $estadoCivil = $_POST['estadoCivil'];
	 $estudios = $_POST['estudios'];
   $ocupacion = $_POST['ocupacion'];
   $ingreso = $_POST['ingreso'];
   $estado = $_POST['estado'];

   
   // Non checkboxes post variables
   $p1 = $_POST['p1'];
   $p5 = $_POST['p5'];
   $p6 = $_POST['p6'];
   $p10 = $_POST['p10'];
   $p11 = $_POST['p11'];
   $p12 = $_POST['p12'];
   $p13 = $_POST['p13'];
   $p16 = $_POST['p16'];
   

   // Checkbox post variables
   $checkbox = $_POST['p2'];
   $checkbox2 = $_POST['p3'];
   $checkbox3 = $_POST['p4'];
   $checkbox4 = $_POST['p7'];
   $checkbox5 = $_POST['p8'];
   $checkbox6 = $_POST['p9'];
   $checkbox7 = $_POST['p14'];
   $checkbox8 = $_POST['p15'];


   // Prepare query to insert user data
   $query1 = "INSERT INTO datos_usuario (Genero, Edad, EstadoCivil, Estudios, Ocupacion, Ingreso, Estado, Usuario_idUsuario) VALUES ('$genero', '$edad', '$estadoCivil', '$estudios', '$ocupacion', '$ingreso', '$estado', ".$_SESSION['idUsuario'].") ";
   
   // Prepare query to insert non checkbox responses
   $query2 = "INSERT INTO respuestas (Respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES 
   ('$p1', 8, ".$_SESSION['idUsuario']."),
   ('$p5', 12, ".$_SESSION['idUsuario']."),
   ('$p6', 13, ".$_SESSION['idUsuario']."),
   ('$p10', 17, ".$_SESSION['idUsuario']."),
   ('$p11', 18, ".$_SESSION['idUsuario']."),
   ('$p12', 19, ".$_SESSION['idUsuario']."),
   ('$p13', 20, ".$_SESSION['idUsuario']."),
   ('$p16', 23, ".$_SESSION['idUsuario'].")
   ";
   

   // Insert checkbox 1
   for ($i=0; $i<sizeof($checkbox); $i++) {
   $query = "INSERT INTO respuestas (respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES ('".$checkbox[$i]."', 9, ".$_SESSION['idUsuario'].") ";
   mysqli_query($conn, $query) or die(mysqli_error($conn));
   }

   
   // Insert checkbox 2
   for ($i=0; $i<sizeof($checkbox2); $i++) {
   $query = "INSERT INTO respuestas (respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES ('".$checkbox2[$i]."', 10, ".$_SESSION['idUsuario'].") ";
   mysqli_query($conn, $query) or die(mysqli_error($conn));
   }

   // Insert checkbox 3
   for ($i=0; $i<sizeof($checkbox3); $i++) {
   $query = "INSERT INTO respuestas (respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES ('".$checkbox3[$i]."', 11, ".$_SESSION['idUsuario'].") ";
   mysqli_query($conn, $query) or die(mysqli_error($conn));
   }

   // Insert checkbox 4
   for ($i=0; $i<sizeof($checkbox4); $i++) {
   $query = "INSERT INTO respuestas (respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES ('".$checkbox4[$i]."', 14, ".$_SESSION['idUsuario'].") ";
   mysqli_query($conn, $query) or die(mysqli_error($conn));
   }

   // Insert checkbox 5
   for ($i=0; $i<sizeof($checkbox5); $i++) {
   $query = "INSERT INTO respuestas (respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES ('".$checkbox5[$i]."', 15, ".$_SESSION['idUsuario'].") ";
   mysqli_query($conn, $query) or die(mysqli_error($conn));
   }

   // Insert checkbox 6
   for ($i=0; $i<sizeof($checkbox6); $i++) {
   $query = "INSERT INTO respuestas (respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES ('".$checkbox6[$i]."', 16, ".$_SESSION['idUsuario'].") ";
   mysqli_query($conn, $query) or die(mysqli_error($conn));
   }

   // Insert checkbox 7
   for ($i=0; $i<sizeof($checkbox7); $i++) {
   $query = "INSERT INTO respuestas (respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES ('".$checkbox7[$i]."', 21, ".$_SESSION['idUsuario'].") ";
   mysqli_query($conn, $query) or die(mysqli_error($conn));
   }

   // Insert checkbox 8
   for ($i=0; $i<sizeof($checkbox8); $i++) {
   $query = "INSERT INTO respuestas (respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES ('".$checkbox8[$i]."', 22, ".$_SESSION['idUsuario'].") ";
   mysqli_query($conn, $query) or die(mysqli_error($conn));
   }
   

   // Insert user data and non checkbox responses
   if (($conn->query($query1) AND $conn->query($query2)) === TRUE) {
    echo "New record created successfully";
    header("location: mensaje.html");
    exit();
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}

$conn->close();

?>