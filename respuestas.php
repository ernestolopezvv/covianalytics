<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $db_name = "covianalytics";

    // Crear Conexion
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Verificar Conexion
    if($conn->connect_error) {
        die("No se ha podido conectar a la Base de datos: Covianalytics " .$conn->connect_error);
    }
    echo "Conexion Exitosa a Basede da datos: Covianalytics .<br>";

    $sql = "INSERT INTO respuestas (idRespuestas, Respuesta, Preguntas_idPreguntas, Usuario_idUsuario) VALUES (5, 'super', '1', '3')";

    if($conn->query($sql)== TRUE){
        echo "Registro Agregado";
    }
    else{
        echo "Error" .$sql. "<br>" .$conn->error;
    }

    $conn->close();