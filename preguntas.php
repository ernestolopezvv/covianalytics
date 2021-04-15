<?php

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
('".htmlspecialchars($GET_["p1"])."', 1, 1)
";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    readfile("dashboard.html");
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 

  $conn->close();

?>