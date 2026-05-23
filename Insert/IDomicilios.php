<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
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
    

    //Ejecutar la instrucción al SMBD
    include("../Controlador.php");
    $Con = Conectar();
    
    //Instruccion sql
    $sql = "INSERT INTO Domicilios (Id, Localidad, Municipio, Entidad_federativa)
    VALUES ('$Id', '$Localidad', '$Municipio', '$Entidad_federativa');";
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
