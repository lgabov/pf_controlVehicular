<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Tarjeta de Verificacion</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="post" action="ITarjetas_Verificacion.php" class="insert-form">
        <h2>Tarjetas de Verificacion</h2>

        <label>Folio</label>
        <input class="input" type="number" id="Folio" name="Folio" required>

        <label>Fecha Expedicion</label>
        <input class="input" type="date" id="Fecha_expedicion" name="Fecha_expedicion" required>

        <label>Tipo Servicio</label>
        <select class="input" name="Tipo_servicio" id="Tipo_servicio" required>
            <option value="verificacion_normal">Verificacion Normal</option>
            <option value="verificacion_extemporanea">Verificacion Extemporanea</option>
            <option value="verificacion_voluntaria">Verificacion Voluntaria</option>
            <option value="reposicion_certificado">Reposicion de Certificado</option>
            <option value="reposicion_holograma">Reposicion de Holograma</option>
            <option value="cambio_holograma">Cambio de Holograma</option>
            <option value="verificacion_doble_cero">Verificacion Doble Cero (00)</option>
            <option value="verificacion_cero">Verificacion Cero (0)</option>
            <option value="verificacion_uno">Verificacion Uno (1)</option>
            <option value="verificacion_dos">Verificacion Dos (2)</option>
        </select>

        <label>Motivo</label>
        <input class="input" type="text" id="Motivo" name="Motivo" required>

        <label>Semestre</label>
        <input class="input" type="number" id="Semestre" name="Semestre" required>

        <label>Vigencia</label>
        <input class="input" type="date" id="Vigencia" name="Vigencia" required>

        <label>Linea Vigencia</label>
        <input class="input" type="text" id="Linea_vigencia" name="Linea_vigencia">

        <label>Tecnico Verificador</label>
        <input class="input" type="text" id="Tecnico_verificador" name="Tecnico_verificador" required>

        <label>Numero Centro</label>
        <input class="input" type="number" id="Numero_centro" name="Numero_centro" required>

        <label>Id Pago</label>
        <input class="input" type="number" id="Id_pago" name="Id_pago" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
    </form>
</body>
</html>