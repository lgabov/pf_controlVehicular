<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Tarjeta de Circulacion</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="ITarjetas_Circulacion.php" class="insert-form">
        <h2>Tarjetas de Circulacion</h2>

        <label>Folio</label>
        <input class="input" type="number" id="Folio" name="Folio" required>

        <label>Vigencia</label>
        <input class="input" type="date" id="Vigencia" name="Vigencia" required>

        <label>Oficina</label>
        <select class="input" id="Oficina" name="Oficina" required>
            <option value="Oficina1">Oficina 1</option>
            <option value="Oficina2">Oficina 2</option>
            <option value="Oficina3">Oficina 3</option>
        </select>

        <label>Operacion</label>
        <input class="input" type="text" id="Operacion" name="Operacion" required>

        <label>Movimiento</label>
        <select class="input" name="Movimiento" id="Movimiento" required>
            <option value="alta">Alta de Vehiculo</option>
            <option value="baja">Baja de Vehiculo</option>
            <option value="cambio_propietario">Cambio de Propietario</option>
            <option value="reposicion">Reposicion por Robo o Extravio</option>
            <option value="renovacion">Renovacion de Tarjeta de Circulacion</option>
            <option value="cambio_domicilio">Cambio de Domicilio</option>
            <option value="correccion_datos">Correccion de Datos</option>
            <option value="revalidacion">Revalidacion</option>
            <option value="emplacamiento">Emplacamiento</option>
            <option value="canje_placas">Canje de Placas</option>
        </select>

        <label>Id Vehiculo</label>
        <input class="input" type="number" id="Id_vehiculo" name="Id_vehiculo" required>

        <label>Id Propietario</label>
        <input class="input" type="number" id="Id_propietario" name="Id_propietario" required>

        <label>Id Pago</label>
        <input class="input" type="number" id="Id_pago" name="Id_pago" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
    </form>
</body>
</html>