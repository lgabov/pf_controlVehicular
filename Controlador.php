<?php

    function Conectar(){
        $Servidor = "localhost";
        $Usuario = "root";
        $Pwd = "";
        $BD = "Control_Vehicular2026";

        $Con = mysqli_connect($Servidor, $Usuario, $Pwd, $BD);
        return $Con;
    }

    function Ejecutar($Con, $SQL){
        $ResultSet = mysqli_query($Con, $SQL);
        return $ResultSet;
    }

    function Procesar(){
        
    }

    function Desconectar($Con){
        $Valor = mysqli_close($Con);
        return $Valor;
    }

function validarExistenciaID($Con, $Tabla, $Columna, $IdVal, $NombreModulo) {
    if (!$Con) {
        $Con = Conectar();
    }

    $tablaLimpia = mysqli_real_escape_string($Con, $Tabla);
    $columnaLimpia = mysqli_real_escape_string($Con, $Columna); 
    $idLimpio = mysqli_real_escape_string($Con, $IdVal);

    $sql = "SELECT 1 FROM $tablaLimpia WHERE $columnaLimpia = '$idLimpio' LIMIT 1";
    $result = mysqli_query($Con, $sql);
    
    if (!$result) {
        die("Error en la consulta de validación: " . mysqli_error($Con));
    }

    if (mysqli_num_rows($result) === 0) {
        Desconectar($Con);
        header("Location: ../Auth/MenuAdmin.php?error=not_found&tipo=" . urlencode($NombreModulo));
        exit();
    }
}



