<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<html>
    <label>Pagos</label>
    <br>
    <form method="get" action="IPagos.php">
        <label> Linea_captura</label>
        <input type="number" id= "Linea_captura" name="Linea_captura" required>
        <br>

        <label> Fecha_limite</label>
        <input type="date" id= "Fecha_limite" name="Fecha_limite" required>
        <br>

        <label> Importe</label>
        <input type="number" id= "Importe" name="Importe" step="0.01" min="0" required>
        <br>

        <label> Instrumento</label>
        <input type="text" id= "Instrumento" name="Instrumento" required>
        <br>

        <input type="submit">
    </form>

</html>