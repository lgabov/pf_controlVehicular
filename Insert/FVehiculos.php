<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Vehiculo</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="post" action="IVehiculos.php" class="insert-form">
        <h2>Vehiculos</h2>

        <label>Id</label>
        <input class="input" type="number" id="Id" name="Id" required>

        <label>Anio</label>
        <input class="input" type="number" id="Año" name="Año" required>

        <label>Placa</label>
        <input class="input" type="text" id="Placa" name="Placa" required>

        <label>Marca</label>
        <input class="input" type="text" id="Marca" name="Marca" required>

        <label>Numero Serie</label>
        <input class="input" type="text" id="Numero_serie" name="Numero_serie" required>

        <label>Origen</label>
        <input class="input" type="text" id="Origen" name="Origen" required>

        <label>Color</label>
        <input class="input" type="text" id="Color" name="Color" required>

        <label>Cilindraje</label>
        <input class="input" type="number" id="Cilindraje" name="Cilindraje" required>

        <label>Capacidad</label>
        <input class="input" type="number" id="Capacidad" name="Capacidad" required>

        <label>Puertas</label>
        <select class="input" id="Puertas" name="Puertas" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <label>Asientos</label>
        <input class="input" type="number" id="Asientos" name="Asientos" required>

        <label>Transmision</label>
        <input class="input" type="text" id="Transmision" name="Transmision" required>

        <label>Clave Vehicular</label>
        <input class="input" type="text" id="Clave_vehicular" name="Clave_vehicular" maxlength="7" required>

        <label>Tipo Combustible</label>
        <select class="input" id="Tipo_combustible" name="Tipo_combustible" required>
            <option value="Gasolina">Gasolina</option>
            <option value="Diesel">Diesel</option>
            <option value="Electrico">Electrico</option>
            <option value="Hibrido">Hibrido</option>
            <option value="No especificado">Otro</option>
        </select>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
    </form>
</body>
</html>