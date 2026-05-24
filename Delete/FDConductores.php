<?php
require_once "../Auth/auth.php";
proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Conductor</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="post" action="DConductores.php" class="insert-form">
        <h2>Eliminar Conductor</h2>

        <label>Numero Licencia</label>
        <input class="input" type="text" name="Numero_licencia" id="Numero_licencia" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-danger" value="Eliminar">
        </div>
    </form>
</body>
</html>