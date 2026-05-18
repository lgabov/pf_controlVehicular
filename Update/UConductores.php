php<?php
    include ('../Controlador.php');
    $Con = Conectar();

    $Licencia_Original = $_POST['Licencia_Original'];
    $Numero_licencia   = $_POST['Numero_licencia'];
    $Nombre            = $_POST['Nombre'];
    $Apellido_paterno  = $_POST['Apellido_paterno'];
    $Apellido_materno  = $_POST['Apellido_materno'];
    $Estado_procedencia= $_POST['Estado_procedencia'];
    $Fecha_nacimiento  = $_POST['Fecha_nacimiento'];
    $Grupo_sanguineo   = $_POST['Grupo_sanguineo'];
    $Donador_organos   = $_POST['Donador_organos'];
    $Sexo              = $_POST['Sexo'];
    $Id_domicilio      = $_POST['Id_domicilio'];

    $sql_actual = "SELECT foto, firma FROM conductores WHERE Numero_licencia='$Licencia_Original';";
    $res_actual = Ejecutar($Con, $sql_actual);
    $fila_actual = mysqli_fetch_row($res_actual);
    
    $foto  = $fila_actual[0]; 
    $firma = $fila_actual[1]; 

    $carpeta_base = '../Public/';

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $archivo_foto = $_FILES['foto'];
        $ext_foto = pathinfo($archivo_foto['name'], PATHINFO_EXTENSION);

        $nueva_foto = '../Public/uploads/' . time() . "_foto." . $ext_foto;
        
        if (move_uploaded_file($archivo_foto['tmp_name'], $carpeta_base . $nueva_foto)) {
            if (!empty($foto) && file_exists($carpeta_base . $foto) && $foto != '../Public/uploads/defecto.png') {
                unlink($carpeta_base . $foto);
            }
            $foto = $nueva_foto; 
        }
    }

    if (!empty($_POST['firma_base64'])) {
        $firma_base64 = $_POST['firma_base64'];
        $nueva_firma = '../Public/uploads/' . time() . "_firma.png";

        $firma_limpia = str_replace('data:image/png;base64,', '', $firma_base64);
        $firma_limpia = str_replace(' ', '+', $firma_limpia);
        $datos_binarios_firma = base64_decode($firma_limpia);
        
        if (file_put_contents($carpeta_base . $nueva_firma, $datos_binarios_firma)) {
            if (!empty($firma) && file_exists($carpeta_base . $firma) && $firma != '../Public/uploads/sin_firma.png') {
                unlink($carpeta_base . $firma);
            }
            $firma = $nueva_firma;
        }
    }

    $sql = "UPDATE conductores SET 
                Numero_licencia = '$Numero_licencia',
                Nombre = '$Nombre',
                Apellido_paterno = '$Apellido_paterno',
                Apellido_materno = '$Apellido_materno',
                Estado_procedencia = '$Estado_procedencia',
                Fecha_nacimiento = '$Fecha_nacimiento',
                Grupo_sanguineo = '$Grupo_sanguineo',
                Donador_organos = '$Donador_organos',
                Sexo = '$Sexo',
                Id_domicilio = '$Id_domicilio',
                foto = '$foto', 
                firma = '$firma'
            WHERE Numero_licencia = '$Licencia_Original';";

    $ResultSet = Ejecutar($Con, $sql);

    if($ResultSet == 1){
        echo "Registro actualizado con éxito";
    } else {
        echo "Error al actualizar el registro: " . $ResultSet;
    }

    Desconectar($Con);
?>

