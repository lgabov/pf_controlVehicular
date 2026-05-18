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
    
    //Instruccion sql
    $sql = "INSERT INTO Centros_Verificacion (Numero_centro, Hora_entrada, Hora_salida)
    VALUES ('$Numero_centro', '$Hora_entrada', '$Hora_salida');";
    //print("<br>".$sql);

    //Enciar la instrucción al SMBD
    include("../Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);

    if($ResultSet == 1){
        print("1 Registro insertado");
    } else {
        print($ResultSet);
    }

    Desconectar($Con);
?>