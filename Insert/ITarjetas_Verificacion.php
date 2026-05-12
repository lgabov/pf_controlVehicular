<?php

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
    include("Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);

    if($ResultSet == 1){
        print("1 Registro insertado");
    } else {
        print($ResultSet);
    }

    Desconectar($Con);

?>