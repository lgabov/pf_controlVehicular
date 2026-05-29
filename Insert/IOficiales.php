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
    try {
        $ResultSet = Ejecutar($Con, $sql);
        echo "Registro insertado correctamente. Redirigiendo...";
        echo '<meta http-equiv="refresh" content="3;url=../Auth/MenuAdmin.php">';
        exit();
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