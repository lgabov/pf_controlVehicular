<?php

    //Recibir valores
    $Folio = $_REQUEST['Folio'];
    $Vigencia = $_REQUEST['Vigencia'];
    $Oficina = $_REQUEST['Oficina'];
    $Operacion = $_REQUEST['Operacion'];
    $Movimiento = $_REQUEST['Movimiento'];
    $Id_vehiculo = $_REQUEST['Id_vehiculo'];
    $Id_propietario = $_REQUEST['Id_propietario'];
    $Id_pago = $_REQUEST['Id_pago'];

    //Mostrar valores
    /*
    print("Folio= " . $Folio . "<br>");
    print("Vigencia= " . $Vigencia . "<br>");
    print("Oficina= " . $Oficina . "<br>");
    print("Operacion= " . $Operacion . "<br>");
    print("Movimiento= " . $Movimiento . "<br>");
    print("Id_vehiculo= " . $Id_vehiculo . "<br>");
    print("Id_propietario= " . $Id_propietario . "<br>");
    print("Id_pago= " . $Id_pago . "<br>");
    */

    //Instruccion sql
    $sql = "INSERT INTO Tarjetas_Circulacion (Folio, Vigencia, Oficina, Operacion, Movimiento, Id_vehiculo, Id_propietario, Id_pago)
    VALUES ('$Folio', '$Vigencia', '$Oficina', '$Operacion', '$Movimiento', '$Id_vehiculo', '$Id_propietario', '$Id_pago');";
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