<?php

    //Recibir valores
    $Id = $_POST['Id'];
    $Localidad = $_POST['Localidad'];
    $Municipio = $_POST['Municipio'];
    $Entidad_federativa = $_POST['Entidad_federativa'];

    //Mostrar valores
    /*
    print("Id= " . $Id . "<br>");
    print("Localidad= " . $Localidad . "<br>");
    print("Municipio= " . $Municipio . "<br>");
    print("Entidad_federativa= " . $Entidad_federativa . "<br>");
    */
    
    //Instruccion sql
    $sql = "INSERT INTO Domicilios (Id, Localidad, Municipio, Entidad_federativa)
    VALUES ('$Id', '$Localidad', '$Municipio', '$Entidad_federativa');";
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
