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

  
    function validarExistenciaID($Con, $Tabla, $IdVal, $NombreModulo) {
    // Detecta automáticamente qué columna debe buscar basándose en lo que envió el menú
    $CampoId = isset($_GET['campoId']) ? $_GET['campoId'] : 'Id'; 
    
    $idLimpio = mysqli_real_escape_string($Con, $IdVal);
    $tablaLimpia = mysqli_real_escape_string($Con, $Tabla);
    $campoLimpio = mysqli_real_escape_string($Con, $CampoId);
    
    $sql = "SELECT 1 FROM $tablaLimpia WHERE $campoLimpio = '$idLimpio' LIMIT 1";
    $result = mysqli_query($Con, $sql);
    
    if (mysqli_num_rows($result) === 0) {
        Desconectar($Con);
        header("Location: ../Auth/MenuAdmin.php?error=not_found&tipo=" . urlencode($NombreModulo));
        exit();
    }
}


?>
