<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Domicilio</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="post" action="IDomicilios.php" class="insert-form">
        <h2>Domicilios</h2>

        <label>Id</label>
        <input class="input" type="number" id="Id" name="Id" required>

        <label>Localidad</label>
        <input class="input" type="text" id="Localidad" name="Localidad" required>

        <label>Municipio</label>
        <input class="input" type="text" id="Municipio" name="Municipio" required>

        <label>Entidad Federativa</label>
        <select class="input" name="Entidad_federativa" id="Entidad_federativa" required>
            <option value="">Seleccione uno...</option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="CDMX">Ciudad de México</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
        </select>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
    </form>
</body>
</html>