<?php
 require_once "../Auth/auth.php";

proteger(["admin"]);
    //Recibir valores
    $Id = $_GET['Id'];
    $Fecha_nacimiento = $_GET['Fecha_nacimiento'];
    $Nombre = $_GET['Nombre'];
    $RFC = $_GET["RFC"];
    $Apellido_paterno = $_GET['Apellido_paterno'];
    $Apellido_materno = $_GET['Apellido_materno'];  
    $Id_domicilio = $_GET['Id_domicilio'];

    //Mostrar valores
    /*
    print("Id= " . $Id . "<br>");
    print("Fecha_nacimiento= " . $Fecha_nacimiento . "<br>");
    print("Nombre= " . $Nombre . "<br>");
    print("RFC= " . $RFC . "<br>");
    print("Apellido_paterno= " . $Apellido_paterno . "<br>");   
    print("Apellido_materno= " . $Apellido_materno . "<br>");
    print("Id_domicilio= " . $Id_domicilio . "<br>");
    */

    //Instruccion sql
    $sql = "INSERT INTO Propietarios (Id, Fecha_nacimiento, Nombre, RFC, Apellido_paterno, Apellido_materno, Id_domicilio)
    VALUES ('$Id', '$Fecha_nacimiento', '$Nombre', '$RFC', '$Apellido_paterno', '$Apellido_materno', '$Id_domicilio');";
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