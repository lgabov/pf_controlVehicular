<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Multa</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="post" action="IMultas.php" class="insert-form">
        <h2>Multas</h2>

        <label>Folio</label>
        <input class="input" type="number" id="Folio" name="Folio" required>

        <label>Fecha</label>
        <input class="input" type="date" id="Fecha" name="Fecha" required>

        <label>Hora</label>
        <input class="input" type="time" id="Hora" name="Hora" required>

        <label>Reporte Seccion</label>
        <input class="input" type="text" id="Reporte_seccion" name="Reporte_seccion" required>

        <label>Nombre Via</label>
        <input class="input" type="text" id="Nombre_via" name="Nombre_via" required>

        <label>Kilometro</label>
        <input class="input" type="number" id="Kilometro" name="Kilometro" required>

        <label>Fundamentos</label>
        <input class="input" type="text" id="Fundamentos" name="Fundamentos" required>

        <label>Observaciones Personal</label>
        <input class="input" type="text" id="Observaciones_personal" name="Observaciones_personal">

        <label>Observaciones Conductor</label>
        <input class="input" type="text" id="Observaciones_conductor" name="Observaciones_conductor">

        <label>Id Oficial</label>
        <input class="input" type="number" id="Id_oficial" name="Id_oficial" required>

        <label>Id Pago</label>
        <input class="input" type="number" id="Id_pago" name="Id_pago" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
    </form>
</body>
</html>