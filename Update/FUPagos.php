<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'pagos','Linea_captura', $_GET['Id'], 'Pagos');

    $Linea_captura = $_GET['Id'];

    $sql = "SELECT * FROM Pagos WHERE Linea_captura='$Linea_captura';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Pago</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="UPagos.php" class="insert-form">
        <h2>Actualizar Pago</h2>

        <label>Linea Captura</label>
        <input class="input" type="number" id="Linea_captura" name="Linea_captura" value="<?php print($Fila[0]); ?>" required>

        <label>Fecha Limite</label>
        <input class="input" type="text" id="Fecha_limite" name="Fecha_limite" value="<?php print($Fila[1]); ?>" required>

        <label>Importe</label>
        <input class="input" type="number" id="Importe" name="Importe" step="0.01" min="0" value="<?php print($Fila[2]); ?>" required>

        <label>Instrumento</label>
        <input class="input" type="text" id="Instrumento" name="Instrumento" value="<?php print($Fila[3]); ?>" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
</body>
</html>