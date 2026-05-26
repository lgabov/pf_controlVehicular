<?php
require_once "../Auth/auth.php";
proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Tarjeta de Circulacion</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="post" action="DTarjetas_Circulacion.php" class="insert-form">
        <h2>Eliminar Tarjeta de Circulacion</h2>

        <label>Folio</label>
        <input class="input" type="text" name="Folio" id="Folio" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-danger" value="Eliminar">
        </div>
    </form>
</body>
</html>