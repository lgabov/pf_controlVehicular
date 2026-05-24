<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Centro de Verificacion</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="post" action="ICentros_Verificacion.php" class="insert-form">
        <h2>Centros de Verificacion</h2>

        <label>Numero Centro</label>
        <input class="input" type="number" id="Numero_centro" name="Numero_centro" required>

        <label>Hora Entrada</label>
        <input class="input" type="time" id="Hora_entrada" name="Hora_entrada" required>

        <label>Hora Salida</label>
        <input class="input" type="time" id="Hora_salida" name="Hora_salida" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
    </form>
</body>
</html>