<?php
require_once "../Auth/auth.php";
proteger(["admin", "user"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Pagos</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="SPagos.php" class="select-form">
        <label>Criterio</label>
        <input class="input" type="text" id="Criterio" name="Criterio">

        <label>Atributo</label>
        <div class="radio-group">
            <span><input type="radio" name="Atributo" value="Linea_captura"> Linea Captura</span>
            <span><input type="radio" name="Atributo" value="Fecha_limite"> Fecha Limite</span>
            <span><input type="radio" name="Atributo" value="Importe"> Importe</span>
            <span><input type="radio" name="Atributo" value="Instrumento"> Instrumento</span>
        </div>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </form>
</body>
</html>