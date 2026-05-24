<?php
require_once "../Auth/auth.php";

proteger(["admin", "user"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Licencias</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="SLicencias.php" class="select-form">
        <label>Criterio</label>
        <input class="input" type="text" id="Criterio" name="Criterio">

        <label>Atributo</label>
        <div class="radio-group">
            <span><input type="radio" id="Atributo_id" name="Atributo" value="Id"> Id</span>
            <span><input type="radio" id="Atributo_fecha" name="Atributo" value="Fecha_expedicion"> Fecha Expedicion</span>
            <span><input type="radio" id="Atributo_anti" name="Atributo" value="Antiguedad"> Antiguedad</span>
            <span><input type="radio" id="Atributo_cond" name="Atributo" value="Id_conductor"> Id Conductor</span>
            <span><input type="radio" id="Atributo_pago" name="Atributo" value="Id_pago"> Id Pago</span>
        </div>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </form>
</body>
</html>