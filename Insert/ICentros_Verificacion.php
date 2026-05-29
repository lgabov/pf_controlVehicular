<?php

require_once "../Auth/auth.php";

proteger(["admin"]);

    //Recibir valores
    $Numero_centro = $_REQUEST['Numero_centro'];
    $Hora_entrada = $_REQUEST['Hora_entrada'];
    $Hora_salida = $_REQUEST['Hora_salida'];

    //Mostrar valores
    /*
    print("Numero_centro= " . $Numero_centro . "<br>");
    print("Hora_entrada= " . $Hora_entrada . "<br>");
    print("Hora_salida= " . $Hora_salida . "<br>");
    */
    


    //Enciar la instrucción al SMBD
    include("../Controlador.php");
    $Con = Conectar();
    try {
        $sql = "INSERT INTO Centros_Verificacion (Numero_centro, Hora_entrada, Hora_salida)
    VALUES ('$Numero_centro', '$Hora_entrada', '$Hora_salida');";
    $ResultSet = Ejecutar($Con, $sql);
  
    echo "Registro insertado correctamente. Redirigiendo...";
    echo '<meta http-equiv="refresh" content="3;url=../Auth/MenuAdmin.php">';
    exit();

    }
    catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            print("Error: El Numero de centro asignado ya se encuentra registrado en el sistema.");
        } else {
            print("Error interno en la base de datos: " . $e->getMessage());
        }

    } finally {
        Desconectar($Con);
    }
?>