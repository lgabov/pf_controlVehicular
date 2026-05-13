<?php

    //Recibir valores
    $Numero_licencia = $_POST['Numero_licencia'];
    $Nombre = $_POST['Nombre'];
    $Apellido_paterno = $_POST['Apellido_paterno'];
    $Apellido_materno = $_POST['Apellido_materno'];
    $Estado_procedencia = $_POST['Estado_procedencia'];
    $Fecha_nacimiento = $_POST['Fecha_nacimiento'];
    $Grupo_sanguineo = $_POST['Grupo_sanguineo'];
    $Donador_organos = $_POST['Donador_organos'];
    $Sexo = $_POST['Sexo'];
    $Id_domicilio = $_POST['Id_domicilio'];


    //Mostrar valores
    /*
    print("Numero_licencia= " . $Numero_licencia . "<br>");
    print("Nombre= " . $Nombre . "<br>");
    print("Apellido_paterno= " . $Apellido_paterno . "<br>");
    print("Apellido_materno= " . $Apellido_materno . "<br>");
    print("Estado_procedencia= " . $Estado_procedencia . "<br>");
    print("Fecha_nacimiento= " . $Fecha_nacimiento . "<br>");
    print("Grupo_sanguineo= " . $Grupo_sanguineo . "<br>");
    print("Donador_organos= " . $Donador_organos . "<br>");
    print("Sexo= " . $Sexo . "<br>");
    print("Id_domicilio= " . $Id_domicilio . "<br>");
    */

    //Instruccion sql
    $sql = "INSERT INTO Conductores (Numero_licencia, Nombre, Apellido_paterno, Apellido_materno, Estado_procedencia, Fecha_nacimiento, 
    Grupo_sanguineo, Donador_organos, Sexo, Id_domicilio)
    VALUES ('$Numero_licencia', '$Nombre', '$Apellido_paterno', '$Apellido_materno', '$Estado_procedencia', '$Fecha_nacimiento', 
    '$Grupo_sanguineo', '$Donador_organos', '$Sexo', '$Id_domicilio');";
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