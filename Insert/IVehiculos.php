<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
    //Recibir valores
    $Id = $_REQUEST['Id'];
    $Año = $_REQUEST['Año'];
    $Placa = $_REQUEST['Placa'];
    $Marca = $_REQUEST['Marca'];
    $Numero_serie = $_REQUEST['Numero_serie'];
    $Origen = $_REQUEST['Origen'];
    $Color = $_REQUEST['Color'];
    $Cilindraje = $_REQUEST['Cilindraje'];
    $Capacidad = $_REQUEST['Capacidad'];
    $Puertas = $_REQUEST['Puertas'];
    $Asientos = $_REQUEST['Asientos'];
    $Transmision = $_REQUEST['Transmision'];
    $Clave_vehicular = $_REQUEST['Clave_vehicular'];
    $Tipo_combustible = $_REQUEST['Tipo_combustible'];

    //Mostrar valores
    /*
    print("Id= " . $Id . "<br>");
    print("Año= " . $Año . "<br>");
    print("Placa= " . $Placa . "<br>");
    print("Marca= " . $Marca . "<br>");
    print("Numero_serie= " . $Numero_serie . "<br>");
    print("Origen= " . $Origen . "<br>");
    print("Color= " . $Color . "<br>");
    print("Cilindraje= " . $Cilindraje . "<br>");
    print("Capacidad= " . $Capacidad . "<br>");
    print("Puertas= " . $Puertas . "<br>");
    print("Asientos= " . $Asientos . "<br>");
    print("Transmision= " . $Transmision . "<br>");
    print("Clave_vehicular= " . $Clave_vehicular . "<br>");
    print("Tipo_combustible= " . $Tipo_combustible . "<br>");
    */

    //Instruccion sql
    $sql = "INSERT INTO Vehiculos (Id, Año, Placa, Marca, Numero_serie, Origen, Color, Cilindraje, Capacidad, 
    Puertas, Asientos, Transmision, Clave_vehicular, Tipo_combustible)
    VALUES ('$Id', '$Año', '$Placa', '$Marca', '$Numero_serie', '$Origen', '$Color', '$Cilindraje', '$Capacidad',
    '$Puertas', '$Asientos', '$Transmision', '$Clave_vehicular', '$Tipo_combustible');";
    //print("<br>".$sql);

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