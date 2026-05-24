<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Pago</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="IPagos.php" class="insert-form">
        <h2>Pagos</h2>

        <label>Linea Captura</label>
        <input class="input" type="number" id="Linea_captura" name="Linea_captura" required>

        <label>Fecha Limite</label>
        <input class="input" type="date" id="Fecha_limite" name="Fecha_limite" required>

        <label>Importe</label>
        <input class="input" type="number" id="Importe" name="Importe" step="0.01" min="0" required>

        <label>Instrumento</label>
        <input class="input" type="text" id="Instrumento" name="Instrumento" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
    </form>
</body>
</html>