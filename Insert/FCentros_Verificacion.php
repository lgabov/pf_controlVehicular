<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<html>

    <label>Centros_Verificacion</label>
    <br>
    <form method="post" action="ICentros_Verificacion.php">
        <label> Numero_centro </label>
        <input type="number" id= "Numero_centro" name="Numero_centro">
        <br>
        <label> Hora_entrada</label>
        <input type="time" id= "Hora_entrada" name="Hora_entrada">
        <br>
        <label> Hora_salida</label>
        <input type="time" id= "Hora_salida" name="Hora_salida">
        <br>
        <input type="submit">
    </form>

</html>