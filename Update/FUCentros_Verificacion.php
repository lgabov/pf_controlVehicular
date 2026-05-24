<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'centros_verificacion','Numero_centro', $_GET['Id'], 'Centros de Verificación');
    $Numero_centro = $_GET['Id'];
    $sql = "SELECT * FROM centros_verificacion WHERE Numero_centro='$Numero_centro';";
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Centro de Verificacion</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="UCentros_Verificacion.php" class="insert-form">
        <h2>Actualizar Centro de Verificacion</h2>

        <label>Numero Centro</label>
        <input class="input" type="number" id="Numero_centro" name="Numero_centro" required value="<?php print($Fila[0]); ?>">

        <label>Hora Entrada</label>
        <input class="input" type="text" id="Hora_entrada" name="Hora_entrada" required value="<?php print($Fila[1]); ?>">

        <label>Hora Salida</label>
        <input class="input" type="text" id="Hora_salida" name="Hora_salida" required value="<?php print($Fila[2]); ?>">

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
</body>
</html>