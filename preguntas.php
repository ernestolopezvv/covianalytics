<?php

session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "covianalytics";


$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($conn->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}

// Insertar respuestas

$sql = "INSERT INTO respuestas (Respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES
('".htmlspecialchars($_GET["p1"])."', 1, ".$_SESSION ['idUsuario'].") 

";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 

  $conn->close();

?>