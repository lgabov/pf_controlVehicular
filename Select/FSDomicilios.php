<?php
require_once "../Auth/auth.php";

proteger(["admin", "user"]);
?>
<html>
    <form method="get" action="SDomicilios.php">
        <label>Criterio </label>
        <input type="text" id="Criterio" name="Criterio">

        <br>
        <label>Atributo </label>
        <input type="radio" id="Atributo" name="Atributo" value="Id"> Id
        <input type="radio" id="Atributo" name="Atributo" value="Localidad"> Localidad
        <input type="radio" id="Atributo" name="Atributo" value="Municipio"> Municipio
        <input type="radio" id="Atributo" name="Atributo" value="Entidad_federativa"> Entidad_federativa
        <input type="submit">
    </form>
</html>