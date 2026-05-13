<?php

    //Recibir valores
    $Id = $_POST['Id'];
    $Fecha_expedicion = $_POST['Fecha_expedicion'];
    $Fecha_validez = $_POST['Fecha_validez'];
    $Antiguedad = $_POST['Antiguedad'];
    $Id_conductor = $_POST['Id_conductor'];
    $Id_pago = $_POST['Id_pago'];


    //Mostrar valores
    /*
    print("Id= " . $Id . "<br>");
    print("Fecha_expedicion= " . $Fecha_expedicion . "<br>");
    print("Fecha_validez= " . $Fecha_validez . "<br>");
    print("Antiguedad= " . $Antiguedad . "<br>");
    print("Id_conductor= " . $Id_conductor . "<br>");
    print("Id_pago= " . $Id_pago . "<br>");
    */

    //Instruccion sql
    $sql = "INSERT INTO Licencias (Id, Fecha_expedicion, Fecha_validez, Antiguedad, Id_conductor, Id_pago)
    VALUES ('$Id', '$Fecha_expedicion', '$Fecha_validez', '$Antiguedad', '$Id_conductor', '$Id_pago');";
    //print("<br>".$sql);

    //Ejecutar la instrucción al SMBD
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