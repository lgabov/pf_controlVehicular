<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'licencias','Id', $_GET['Id'], 'Licencias');
    $Id = $_GET['Id'];

    $sql = "SELECT * FROM licencias WHERE Id='$Id';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Licencia</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="post" action="ULicencias.php" class="insert-form">
        <h2>Actualizar Licencia</h2>

        <label>Id</label>
        <input class="input" type="number" id="Id" name="Id" value="<?php echo $Fila[0]; ?>" required>

        <label>Fecha Expedicion</label>
        <input class="input" type="text" id="Fecha_expedicion" name="Fecha_expedicion" value="<?php echo $Fila[1]; ?>" required>

        <label>Fecha Validez</label>
        <input class="input" type="text" id="Fecha_validez" name="Fecha_validez" value="<?php echo $Fila[2]; ?>" required>

        <label>Antiguedad</label>
        <input class="input" type="text" id="Antiguedad" name="Antiguedad" value="<?php echo $Fila[3]; ?>" required>

        <label>Id Conductor</label>
        <input class="input" type="number" id="Id_conductor" name="Id_conductor" value="<?php echo $Fila[4]; ?>" required>

        <label>Id Pago</label>
        <input class="input" type="number" id="Id_pago" name="Id_pago" value="<?php echo $Fila[5]; ?>" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
</body>
</html>