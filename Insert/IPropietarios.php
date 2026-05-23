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
    try {
        $ResultSet = Ejecutar($Con, $sql);
        print("Registro insertado correctamente.");
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            print("Error: El ID o RFC asignado ya se encuentra registrado en el sistema.");
        } else {
            print("Error interno en la base de datos: " . $e->getMessage());
        }
    } finally {
        Desconectar($Con);
    }
    
?>