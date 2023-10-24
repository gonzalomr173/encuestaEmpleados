<?php
    //credenciales de la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "encuestaempleados";

    //crea la conexion de php con la base de datos
    $conn = new mysqli($servername, $username, $password, $database);

    //por si hay error de conexion esto te informa un error
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }


    //aca recibe datos del html
       //var_dump($_POST);die();
        

        $ambiente = array(
            "animosidad" => $_POST["ambiente_animosidad_trabajo"],
            "causa_estres" => $_POST["ambiente_causa_estres"],
            "valorado_reconocido" => $_POST["ambiente_valorado_reconocido"],
            "aspectos_motivacion" => $_POST["ambiente_aspectos_motivacion"]
        );

        $compromiso = array(
            "identificacion_valores" => $_POST["compromiso_identificacion_valores"],
            "compromiso_organizacion" => $_POST["compromiso_compromiso_organizacion"]
        );

        
        $datos = array(
            "ambiente" => $ambiente,
            "compromiso" => $compromiso            
                        );


        //aca crea la sentencia SQL que se va a ejecutar
       // $sql = "INSERT INTO respuestasegmento (id_segmento, respuesta) VALUES (1, $_POST['animosidad'] )" ;

         "INSERT INTO respuestasegmto (ambiente_animosidad_trabajo, ambiente_causa_estres, ambiente_valorado_reconocido, ambiente_aspectos_motivacion, compromiso_identificacion_valores, compromiso_compromiso_organizacion)
        VALUES ('{$ambiente["animosidad"]}',
            '{$ambiente["causa_estres"]}',
            '{$ambiente["valorado_reconocido"]}',
            '{$ambiente["aspectos_motivacion"]}',
            '{$compromiso["identificacion_valores"]}',
            '{$compromiso["compromiso_organizacion"]}')";


        
        //aca ejecuta el SQL y lo ejecuta
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        //cerrar la conexion
        $conn->close();

        //redirecciona a confirmacion
        header("Location: confirmacion.html");
        
        //cierra el script php
        exit();

?>
