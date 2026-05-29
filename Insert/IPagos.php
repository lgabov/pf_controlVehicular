<?php
 require_once "../Auth/auth.php";

proteger(["admin"]);
    //Recibir valores
    $Linea_captura = $_GET['Linea_captura'];
    $Fecha_limite = $_GET['Fecha_limite'];
    $Importe = $_GET['Importe'];
    $Instrumento = $_GET['Instrumento'];

    //Mostrar valores
    /*
    print("Linea_captura= " . $Linea_captura . "<br>");
    print("Fecha_limite= " . $Fecha_limite . "<br>");
    print("Importe= " . $Importe . "<br>");
    print("Instrumento= " . $Instrumento . "<br>");
    */

    //Instruccion sql
    $sql = "INSERT INTO Pagos (Linea_captura, Fecha_limite, Importe, Instrumento)
    VALUES ('$Linea_captura', '$Fecha_limite', '$Importe', '$Instrumento');";
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
            print("Error: La Linea de captura asignada ya se encuentra registrada en el sistema.");
        } else {
            print("Error interno en la base de datos: " . $e->getMessage());
        }
    } finally {
        Desconectar($Con);
    }

?>