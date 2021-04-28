<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "covianalytics4";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Verificar
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    } 
    
    // Answered
    $sql1 = mysqli_query($conn,"SELECT COUNT(DISTINCT Usuario_idUsuario) FROM respuestas");
    $row1 = mysqli_fetch_row($sql1);

    // Total Sample
    $sql2 = mysqli_query($conn,"SELECT COUNT(idUsuario) FROM usuario");
    $row2 = mysqli_fetch_row($sql2);
    

    // Not Answered
    $sql3 = mysqli_query($conn,"SELECT COUNT(idUsuario) FROM usuario WHERE NOT EXISTS (SELECT * FROM respuestas WHERE idUsuario = Usuario_idUsuario)");
    $row3 = mysqli_fetch_row($sql3);

    $usuario = array("totalSample" => $row2[0], "answered" => $row1[0], "notAnswered" => $row3[0]);

    $conn->close();
    $myJSON = json_encode($usuario);

    echo $myJSON;
    ?>
