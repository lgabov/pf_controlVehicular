<?php
require_once "../Auth/auth.php";
proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Domicilio</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="post" action="DDomicilios.php" class="insert-form">
        <h2>Eliminar Domicilio</h2>

        <label>Id</label>
        <input class="input" type="text" name="Id" id="Id" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-danger" value="Eliminar">
        </div>
    </form>
</body>
</html>