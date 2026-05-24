<?php
require_once "../Auth/auth.php";
proteger(["admin", "user"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Vehiculos</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="SVehiculos.php" class="select-form">
        <label>Criterio</label>
        <input class="input" type="text" id="Criterio" name="Criterio">

        <label>Atributo</label>
        <div class="radio-group">
            <span><input type="radio" name="Atributo" value="Id"> Id</span>
            <span><input type="radio" name="Atributo" value="Año"> Anio</span>
            <span><input type="radio" name="Atributo" value="Placa"> Placa</span>
            <span><input type="radio" name="Atributo" value="Numero_serie"> Numero de Serie</span>
            <span><input type="radio" name="Atributo" value="Marca"> Marca</span>
            <span><input type="radio" name="Atributo" value="Origen"> Origen</span>
            <span><input type="radio" name="Atributo" value="Color"> Color</span>
            <span><input type="radio" name="Atributo" value="Cilindraje"> Cilindraje</span>
            <span><input type="radio" name="Atributo" value="Capacidad"> Capacidad</span>
            <span><input type="radio" name="Atributo" value="Puertas"> Puertas</span>
            <span><input type="radio" name="Atributo" value="Asientos"> Asientos</span>
            <span><input type="radio" name="Atributo" value="Transmision"> Transmision</span>
            <span><input type="radio" name="Atributo" value="Clave_vehicular"> Clave Vehicular</span>
            <span><input type="radio" name="Atributo" value="Tipo_combustible"> Tipo de Combustible</span>
        </div>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </form>
</body>
</html>