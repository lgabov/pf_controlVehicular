<?php

    //Recibir valores
    $Linea_captura = $_GET['Linea_captura'];
    $Fecha_limite = $_GET['Fecha_limite'];
    $Importe = $_GET['Importe'];
    $Instrumento = $_GET['Instrumento'];

    //Mostrar valores
    /*
    print("Linea_captura= " . $Linea_captura . "<br>");
    print("Fecha_limite= " . $Fecha_limite . "<br>");
    print("Importe= " . $Importe . "<br>");
    print("Instrumento= " . $Instrumento . "<br>");
    */

    //Instruccion sql
    $sql = "INSERT INTO Pagos (Linea_captura, Fecha_limite, Importe, Instrumento)
    VALUES ('$Linea_captura', '$Fecha_limite', '$Importe', '$Instrumento');";
    //print("<br>".$sql);

    //Ejecutar la instrucción al SMBD
    include("Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);

    if($ResultSet == 1){
        print("1 Registro insertado");
    } else {
        print($ResultSet);
    }

    Desconectar($Con);

?>