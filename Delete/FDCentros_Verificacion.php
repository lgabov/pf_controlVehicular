<?php
require_once "../Auth/auth.php";
proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Centro de Verificacion</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="post" action="DCentros_Verificacion.php" class="insert-form">
        <h2>Eliminar Centro de Verificacion</h2>

        <label>Numero Centro</label>
        <input class="input" type="text" name="Numero_centro" id="Numero_centro" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-danger" value="Eliminar">
        </div>
    </form>
</body>
</html>