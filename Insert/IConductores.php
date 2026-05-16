<?php

ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Recibir valores
    $Numero_licencia = $_POST['Numero_licencia'];
    $Nombre = $_POST['Nombre'];
    $Apellido_paterno = $_POST['Apellido_paterno'];
    $Apellido_materno = $_POST['Apellido_materno'];
    $Estado_procedencia = $_POST['Estado_procedencia'];
    $Fecha_nacimiento = $_POST['Fecha_nacimiento'];
    $Grupo_sanguineo = $_POST['Grupo_sanguineo'];
    $Donador_organos = $_POST['Donador_organos'];
    $Sexo = $_POST['Sexo'];
    $Id_domicilio = $_POST['Id_domicilio'];
    
    $carpeta_fotos = '../public/imagenes/fotos/';
    $carpeta_firmas = '../public/imagenes/firmas/';

    $ruta_foto_bd = null;
    $ruta_firma_bd = null;

    // Procesar Foto
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $ext_foto = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        
        // Nombramos la foto usando el número de licencia 
        $nombre_foto = 'foto_' . $Numero_licencia . '.' . $ext_foto;
        $destino_foto = $carpeta_fotos . $nombre_foto;

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $destino_foto)) {
            $ruta_foto_bd = $destino_foto;
        }
    }

    // Procesar Firma
    if (isset($_FILES['firma']) && $_FILES['firma']['error'] === UPLOAD_ERR_OK) {
        $ext_firma = pathinfo($_FILES['firma']['name'], PATHINFO_EXTENSION);
        
        // Nombramos la firma usando el número de licencia para mantener relación con el conductor
        $nombre_firma = 'firma_' . $Numero_licencia . '.' . $ext_firma;
        $destino_firma = $carpeta_firmas . $nombre_firma;

        if (move_uploaded_file($_FILES['firma']['tmp_name'], $destino_firma)) {
            $ruta_firma_bd = $destino_firma;
        }
    }
    $val_foto = $ruta_foto_bd ? "'$ruta_foto_bd'" : "NULL";
    $val_firma = $ruta_firma_bd ? "'$ruta_firma_bd'" : "NULL";

    print("Ruta Foto: " . $val_foto . "<br>");
    print("Ruta Firma: " . $val_firma . "<br>");

    //Mostrar valores
    /*
    print("Numero_licencia= " . $Numero_licencia . "<br>");
    print("Nombre= " . $Nombre . "<br>");
    print("Apellido_paterno= " . $Apellido_paterno . "<br>");
    print("Apellido_materno= " . $Apellido_materno . "<br>");
    print("Estado_procedencia= " . $Estado_procedencia . "<br>");
    print("Fecha_nacimiento= " . $Fecha_nacimiento . "<br>");
    print("Grupo_sanguineo= " . $Grupo_sanguineo . "<br>");
    print("Donador_organos= " . $Donador_organos . "<br>");
    print("Sexo= " . $Sexo . "<br>");
    print("Id_domicilio= " . $Id_domicilio . "<br>");
    */

    //Instruccion sql
    $sql = "INSERT INTO Conductores (Numero_licencia, Nombre, Apellido_paterno, Apellido_materno, Estado_procedencia, Fecha_nacimiento, 
    Grupo_sanguineo, Donador_organos, Sexo, Id_domicilio, foto, firma)
    VALUES ('$Numero_licencia', '$Nombre', '$Apellido_paterno', '$Apellido_materno', '$Estado_procedencia', '$Fecha_nacimiento', 
    '$Grupo_sanguineo', '$Donador_organos', '$Sexo', '$Id_domicilio', $val_foto, $val_firma);";

    //Enciar la instrucción al SMBD
    include("../Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);

    if($ResultSet == 1){
        print("1 Registro insertado");
    } else {
        print($ResultSet);
    }

    Desconectar($Con);

?>