<?php
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

    $carpeta_destino = '../Public/';
    if (!file_exists($carpeta_destino)) {
        mkdir($carpeta_destino, 0777, true);
    }

    // Procesar la FOTOGRAFÍA 
    $archivo_foto = $_FILES['foto'];
    $ext_foto = pathinfo($archivo_foto['name'], PATHINFO_EXTENSION);
    $foto = $carpeta_destino . time() . "_foto." . $ext_foto;
    move_uploaded_file($archivo_foto['tmp_name'], $foto);

    $firma_base64 = $_POST['firma_base64'];
    $firma = $carpeta_destino . time() . "_firma.png";
 
    $firma_limpia = str_replace('data:image/png;base64,', '', $firma_base64);
    $firma_limpia = str_replace(' ', '+', $firma_limpia);
    $datos_binarios_firma = base64_decode($firma_limpia);
    file_put_contents($firma, $datos_binarios_firma);

    $sql = "INSERT INTO Conductores (Numero_licencia, Nombre, Apellido_paterno, Apellido_materno, Estado_procedencia, Fecha_nacimiento, 
    Grupo_sanguineo, Donador_organos, Sexo, Id_domicilio, foto, firma)
    VALUES ('$Numero_licencia', '$Nombre', '$Apellido_paterno', '$Apellido_materno', '$Estado_procedencia', '$Fecha_nacimiento', 
    '$Grupo_sanguineo', '$Donador_organos', '$Sexo', '$Id_domicilio', '$foto', '$firma');";

    include("../Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);

    if($ResultSet == 1){
        print("1 Registro insertado con éxito ");
    } else {
        print($ResultSet);
    }

    Desconectar($Con);
?>
