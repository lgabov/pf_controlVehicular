<?php
 require_once "../Auth/auth.php";

proteger(["admin"]);
    //Recibir valores
    $Id = $_POST['Id'];
    $Nombre  = $_POST['Nombre'];
    $Apellidos = $_POST['Apellidos'];
    $Grupo = $_POST['Grupo'];

    //Mostrar valores
    /*
    print("Id= " . $Id . "<br>");
    print("Nombre= " . $Nombre . "<br>");
    print("Apellidos= " . $Apellidos . "<br>");
    print("Grupo= " . $Grupo . "<br>");
    */

    //Instruccion sql
    $sql = "INSERT INTO Oficiales (Id, Nombre, Apellidos, Grupo)
    VALUES ('$Id', '$Nombre', '$Apellidos', '$Grupo');";
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