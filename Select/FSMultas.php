<?php
require_once "../Auth/auth.php";

proteger(["admin", "user"]);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ver Multas</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>

<body>
    <form method="get" action="SMultas.php" class="select-form">
        <label>Criterio</label>
        <input class="input" type="text" id="Criterio" name="Criterio">


        <label>Atributo</label>
        <div class="radio-group">
        <span><input type="radio" id="Atributo" name="Atributo" value="Folio"> Folio </span>
        <span><input type="radio" id="Atributo" name="Atributo" value="Fecha"> Fecha </span>
        <span><input type="radio" id="Atributo" name="Atributo" value="Hora"> Hora </span>
        <span><input type="radio" id="Atributo" name="Atributo" value="Reporte_seccion"> Reporte Seccion </span>
        <span><input type="radio" id="Atributo" name="Atributo" value="Nombre_via"> Nombre Via </span>
        <span><input type="radio" id="Atributo" name="Atributo" value="Kilometro"> Kilometro </span>
        <span><input type="radio" id="Atributo" name="Atributo" value="Fundamentos"> Fundamentos </span>
        <span><input type="radio" id="Atributo" name="Atributo" value="Observaciones_personal"> Observaciones Personal </span>
        <span><input type="radio" id="Atributo" name="Atributo" value="Observaciones_conductor"> Observaciones Conductor </span>
        <span><input type="radio" id="Atributo" name="Atributo" value="Id_oficial"> Id Oficial </span>
        <span><input type="radio" id="Atributo" name="Atributo" value="Id_pago"> Id Pago </span>
        </div>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </form>
</body>
</html>
