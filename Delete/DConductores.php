<?php
    $Numero_licencia = $_POST["Numero_licencia"];

    $sql = "DELETE FROM Conductores WHERE Numero_licencia = '$Numero_licencia';";
    // print($sql);

    include("../Controlador.php");
    $Con = Conectar();

    // OBTENCIÓN DE RUTAS 
    $sql_buscar = "SELECT foto, firma FROM Conductores WHERE Numero_licencia = '$Numero_licencia';";
    $Resultado_buscar = Ejecutar($Con, $sql_buscar);
    
    $ruta_foto = null;
    $ruta_firma = null;
    
    if ($Resultado_buscar) {
        $Fila = mysqli_fetch_assoc($Resultado_buscar);
        if ($Fila) {
            $ruta_foto = $Fila['foto'];
            $ruta_firma = $Fila['firma'];
        }
    }

    //Ejecutar DELETE
    $ResultSet = Ejecutar($Con, $sql);
    $FilasAfectadas = mysqli_affected_rows($Con);

    if($FilasAfectadas == 1) {
        print("1 Registro eliminado de la base de datos. ");

        if (!empty($ruta_foto) && file_exists($ruta_foto)) {
            unlink($ruta_foto); 
            print("Foto eliminada del servidor. ");
        }

        if (!empty($ruta_firma) && file_exists($ruta_firma)) {
            unlink($ruta_firma);
            print("Firma eliminada del servidor. ");
        }

    } else {
        print("0 registros eliminados");
    }

    Desconectar($Con);
?>