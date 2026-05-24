<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'tarjetas_circulacion','Folio', $_GET['Id'], 'Tarjetas de Circulación');
    $Folio = $_GET['Id'];

    $sql = "SELECT * FROM tarjetas_circulacion WHERE Folio='$Folio';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Tarjeta de Circulacion</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="UTarjetas_Circulacion.php" class="insert-form">
        <h2>Actualizar Tarjeta de Circulacion</h2>

        <label>Folio</label>
        <input class="input" type="number" id="Folio" name="Folio" value="<?php print($Fila[0]); ?>" required>

        <label>Vigencia</label>
        <input class="input" type="text" id="Vigencia" name="Vigencia" value="<?php print($Fila[1]); ?>" required>

        <label>Oficina</label>
        <input class="input" type="text" id="Oficina" name="Oficina" value="<?php print($Fila[2]); ?>" required>

        <label>Operacion</label>
        <input class="input" type="text" id="Operacion" name="Operacion" value="<?php print($Fila[3]); ?>" required>

        <label>Movimiento</label>
        <input class="input" type="text" id="Movimiento" name="Movimiento" value="<?php print($Fila[4]); ?>" required>

        <label>Id Vehiculo</label>
        <input class="input" type="number" id="Id_vehiculo" name="Id_vehiculo" value="<?php print($Fila[5]); ?>" required>

        <label>Id Propietario</label>
        <input class="input" type="number" id="Id_propietario" name="Id_propietario" value="<?php print($Fila[6]); ?>" required>

        <label>Id Pago</label>
        <input class="input" type="number" id="Id_pago" name="Id_pago" value="<?php print($Fila[7]); ?>" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
</body>
</html>