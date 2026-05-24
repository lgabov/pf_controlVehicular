<?php
require_once "../Auth/auth.php";
proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Propietario</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="IPropietarios.php" class="insert-form">
        <h2>Propietarios</h2>

        <label>Id</label>
        <input class="input" type="number" id="Id" name="Id" required>

        <label>Fecha Nacimiento</label>
        <input class="input" type="date" id="Fecha_nacimiento" name="Fecha_nacimiento" required>

        <label>Nombre</label>
        <input class="input" type="text" id="Nombre" name="Nombre" required>

        <label>RFC</label>
        <input class="input" type="text" id="RFC" name="RFC" maxlength="13" required>

        <label>Apellido Paterno</label>
        <input class="input" type="text" id="Apellido_paterno" name="Apellido_paterno" required>

        <label>Apellido Materno</label>
        <input class="input" type="text" id="Apellido_materno" name="Apellido_materno" required>

        <label>Id Domicilio</label>
        <input class="input" type="number" id="Id_domicilio" name="Id_domicilio" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
    </form>
</body>
</html>