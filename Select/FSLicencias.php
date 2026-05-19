<?php
require_once "../Auth/auth.php";

proteger(["admin", "user"]);
?>
<html>
    <form method="get" action="SLicencias.php">
        <label>Criterio </label>
        <input type="text" id="Criterio" name="Criterio">

        <br>
        <label>Atributo </label>
        <input type="radio" id="Atributo" name="Atributo" value="Id"> Id
        <input type="radio" id="Atributo" name="Atributo" value="Fecha_expedicion"> Fecha Expedicion
        <input type="radio" id="Atributo" name="Atributo" value="Antiguedad"> Antiguedad
        <input type="radio" id="Atributo" name="Atributo" value="Id_conductor"> Id Conductor
        <input type="radio" id="Atributo" name="Atributo" value="Id_pago"> Id Pago
        <input type="submit">
    </form>
</html>