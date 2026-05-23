<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
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

    //Ejecutar la instrucción al SMBD
    include("../Controlador.php");
    $Con = Conectar();

    try {
        $ResultSet = Ejecutar($Con, $sql);
        print("Registro insertado correctamente.");
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            print("Error: El ID asignado ya se encuentra registrado en el sistema.");
        } else {
            print("Error interno en la base de datos: " . $e->getMessage());
        }
    } finally {
        Desconectar($Con);
    }

    
?>