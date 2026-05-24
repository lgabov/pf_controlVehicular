<?php
require_once "../Auth/auth.php";
proteger(["admin", "user"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Tarjetas de Circulacion</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="STarjetas_Circulacion.php" class="select-form">
        <label>Criterio</label>
        <input class="input" type="text" id="Criterio" name="Criterio">

        <label>Atributo</label>
        <div class="radio-group">
            <span><input type="radio" name="Atributo" value="Folio"> Folio</span>
            <span><input type="radio" name="Atributo" value="Vigencia"> Vigencia</span>
            <span><input type="radio" name="Atributo" value="Operacion"> Operacion</span>
            <span><input type="radio" name="Atributo" value="Oficina"> Oficina</span>
            <span><input type="radio" name="Atributo" value="Movimiento"> Movimiento</span>
            <span><input type="radio" name="Atributo" value="Id_vehiculo"> Id Vehiculo</span>
            <span><input type="radio" name="Atributo" value="Id_propietario"> Id Propietario</span>
            <span><input type="radio" name="Atributo" value="Id_pago"> Id Pago</span>
        </div>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </form>
</body>
</html>