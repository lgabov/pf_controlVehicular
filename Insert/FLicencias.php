<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<html>
    <label>Licencias</label>
    <br>
    <form method="post" action="ILicencias.php" >
        <label> Id</label>
        <input type="number" id= "Id" name="Id" required>
        <br>

        <label> Fecha_expedicion</label>
        <input type="date" id= "Fecha_expedicion" name="Fecha_expedicion" required>
        <br>

        <label> Fecha_validez</label>
        <input type="date" id= "Fecha_validez" name="Fecha_validez" required>
        <br>

        <label> Antiguedad</label>
        <input type="date" id= "Antiguedad" name="Antiguedad" required>
        <br>

        <label> Id_conductor</label>
        <input type="number" id= "Id_conductor" name="Id_conductor" required>
        <br>

        <label> Id_pago</label>
        <input type="number" id= "Id_pago" name="Id_pago" required>
        <br>

        <input type="submit">
    </form>

</html>