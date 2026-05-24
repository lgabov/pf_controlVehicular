<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Oficial</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="post" action="IOficiales.php" class="insert-form">
        <h2>Oficiales</h2>

        <label>Id</label>
        <input class="input" type="number" id="Id" name="Id" required>

        <label>Nombre</label>
        <input class="input" type="text" id="Nombre" name="Nombre" required>

        <label>Apellidos</label>
        <input class="input" type="text" id="Apellidos" name="Apellidos" required>

        <label>Grupo</label>
        <input class="input" type="text" id="Grupo" name="Grupo" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
    </form>
</body>
</html>