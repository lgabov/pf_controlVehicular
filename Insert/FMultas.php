<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<html>

    <label>Multas</label>
    <br>
    <form method="post" action="IMultas.php">
        <label> Folio</label>
        <input type="number" id= "Folio" name="Folio" required>
        <br>
        
        <label> Fecha</label>
        <input type="date" id= "Fecha" name="Fecha" required>
        <br>

        <label> Hora</label>
        <input type="time" id= "Hora" name="Hora" required>
        <br>

        <label> Reporte_seccion</label>
        <input type="text" id= "Reporte_seccion" name="Reporte_seccion" required>
        <br>

        <label> Nombre_via</label>
        <input type="text" id= "Nombre_via" name="Nombre_via" required>
        <br>

        <label> Kilometro</label>
        <input type="number" id= "Kilometro" name="Kilometro" required>
        <br>

        <label> Fundamentos</label>
        <input type="text" id= "Fundamentos" name="Fundamentos" required>
        <br>

        <label> Observaciones_personal</label>
        <input type="text" id= "Observaciones_personal" name="Observaciones_personal">
        <br>

        <label> Observaciones_conductor</label>
        <input type="text" id= "Observaciones_conductor" name="Observaciones_conductor">
        <br>

        <label> Id_oficial</label>
        <input type="number" id= "Id_oficial" name="Id_oficial" required>
        <br>

        <label> Id_pago</label>
        <input type="number" id= "Id_pago" name="Id_pago" required>
        <br>

        <input type="submit">
    </form>

</html>