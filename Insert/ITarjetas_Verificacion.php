<?php
 require_once "../Auth/auth.php";

proteger(["admin"]);

    //Recibir valores
    $Folio = $_POST['Folio'];
    $Fecha_expedicion = $_POST['Fecha_expedicion'];
    $Tipo_servicio = $_POST['Tipo_servicio'];
    $Motivo = $_POST['Motivo'];
    $Semestre = $_POST['Semestre'];
    $Vigencia = $_POST['Vigencia'];
    $Linea_vigencia = $_POST['Linea_vigencia'];
    $Tecnico_verificador = $_POST['Tecnico_verificador'];
    $Numero_centro = $_POST['Numero_centro'];
    $Id_pago = $_POST['Id_pago'];

    //Mostrar valores
    /*
    print("Folio= " . $Folio . "<br>");
    print("Fecha_expedicion= " . $Fecha_expedicion . "<br>");
    print("Tipo_servicio= " . $Tipo_servicio . "<br>");
    print("Motivo= " . $Motivo . "<br>");
    print("Semestre= " . $Semestre . "<br>");
    print("Vigencia= " . $Vigencia . "<br>");
    print("Linea_vigencia= " . $Linea_vigencia . "<br>");
    print("Tecnico_verificador= " . $Tecnico_verificador . "<br>");
    print("Numero_centro= " . $Numero_centro . "<br>");
    print("Id_pago= " . $Id_pago . "<br>");
    */

    //Instruccion sql
    $sql = "INSERT INTO Tarjetas_Verificacion (Folio, Fecha_expedicion, Tipo_servicio, Motivo, Semestre, Vigencia, Linea_vigencia,  Tecnico_verificador, Numero_centro, Id_pago)
    VALUES ('$Folio', '$Fecha_expedicion', '$Tipo_servicio', '$Motivo', '$Semestre', '$Vigencia', '$Linea_vigencia', '$Tecnico_verificador', '$Numero_centro', '$Id_pago');";
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
            print("Error: El Folio asignado ya se encuentra registrado en el sistema.");
        } else {
            print("Error interno en la base de datos: " . $e->getMessage());
        }
    } finally {
        Desconectar($Con);
    }

?>