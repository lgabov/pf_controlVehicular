<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<html>
    <form method="get" action="SCentros_Verificacion.php">
        <label>Criterio </label>
        <input type="text" id="Criterio" name="Criterio">

        <br>
        <label>Atributo </label>
        <input type="radio" id="Atributo" name="Atributo" value="Numero_Centro"> Numero Centro
        <input type="radio" id="Atributo" name="Atributo" value="Hora_entrada"> Hora Entrada
        <input type="radio" id="Atributo" name="Atributo" value="Hora_salida"> Hora Salida
        <input type="submit">
    </form>
</html>