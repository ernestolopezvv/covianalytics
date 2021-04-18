<?php

session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "covianalytics1";


$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($conn->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}

// Insertar datos de usuario

$sql = "INSERT INTO datos_usuario (Genero, Edad, EstadoCivil, Estudios, Ocupacion, Ingreso, Estado, Usuario_idUsuario) VALUES
('".htmlspecialchars($_GET["genero"])."', 
'".htmlspecialchars($_GET["edad"])."',
'".htmlspecialchars($_GET["estadoCivil"])."',
'".htmlspecialchars($_GET["estudios"])."',
'".htmlspecialchars($_GET["ocupacion"])."',
'".htmlspecialchars($_GET["ingreso"])."',
'".htmlspecialchars($_GET["estado"])."',
".$_SESSION['idUsuario'].")
";

// Insertar respuestas
$sqll = "INSERT INTO respuestas (Respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES
('".htmlspecialchars($_GET["p1"])."', 8, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p2"])."', 9, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p3"])."', 10, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p4"])."', 11, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p5"])."', 12, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p6"])."', 13, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p7"])."', 14, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p8"])."', 15, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p9"])."', 16, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p10"])."', 17, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p11"])."', 18, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p12"])."', 19, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p13"])."', 20, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p14"])."', 21, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p15"])."', 22, ".$_SESSION['idUsuario']."), 
('".htmlspecialchars($_GET["p16"])."', 23, ".$_SESSION['idUsuario'].")
";


if (($conn->query($sql) AND $conn->query($sqll)) === TRUE) {
  echo "New record created successfully";
  session_unset();
  session_destroy();
  header("location: mensaje.html");
  exit();
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();

?>