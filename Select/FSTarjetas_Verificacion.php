<?php
require_once "../Auth/auth.php";
proteger(["admin", "user"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Tarjetas de Verificacion</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="STarjetas_Verificacion.php" class="select-form">
        <label>Criterio</label>
        <input class="input" type="text" id="Criterio" name="Criterio">

        <label>Atributo</label>
        <div class="radio-group">
            <span><input type="radio" name="Atributo" value="Folio"> Folio</span>
            <span><input type="radio" name="Atributo" value="Tipo_servicio"> Tipo de Servicio</span>
            <span><input type="radio" name="Atributo" value="Fecha_expedicion"> Fecha de Expedicion</span>
            <span><input type="radio" name="Atributo" value="Motivo"> Motivo</span>
            <span><input type="radio" name="Atributo" value="Semestre"> Semestre</span>
            <span><input type="radio" name="Atributo" value="Vigencia"> Vigencia</span>
            <span><input type="radio" name="Atributo" value="Tecnico_verificador"> Tecnico Verificador</span>
            <span><input type="radio" name="Atributo" value="Linea_vigencia"> Linea de Vigencia</span>
            <span><input type="radio" name="Atributo" value="Numero_centro"> Numero de Centro</span>
            <span><input type="radio" name="Atributo" value="Id_pago"> Id Pago</span>
        </div>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </form>
</body>
</html>