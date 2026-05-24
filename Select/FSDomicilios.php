<?php
require_once "../Auth/auth.php";

proteger(["admin", "user"]);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ver Domicilios</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>

<body>
    <form method="get" action="SDomicilios.php" class="select-form">
        <label>Criterio</label>
        <input class="input" type="text" id="Criterio" name="Criterio">

        <label>Atributo</label>
        <input type="radio" id="Atributo" name="Atributo" value="Id"> Id
        <input type="radio" id="Atributo" name="Atributo" value="Localidad"> Localidad
        <input type="radio" id="Atributo" name="Atributo" value="Municipio"> Municipio
        <input type="radio" id="Atributo" name="Atributo" value="Entidad_federativa"> Entidad Federativa

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </form>
</body>
</html>