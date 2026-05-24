<?php
require_once "../Auth/auth.php";

proteger(["admin", "user"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Conductores</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="SConductores.php" class="select-form">
        <label>Criterio</label>
        <input class="input" type="text" id="Criterio" name="Criterio">

        <label>Atributo</label>
        <div class="radio-group">
            <span><input type="radio" name="Atributo" value="Numero_Licencia"> Numero Licencia</span>
            <span><input type="radio" name="Atributo" value="Nombre"> Nombre</span>
            <span><input type="radio" name="Atributo" value="Apellido_paterno"> Apellido Paterno</span>
            <span><input type="radio" name="Atributo" value="Apellido_materno"> Apellido Materno</span>
            <span><input type="radio" name="Atributo" value="Fecha_nacimiento"> Fecha Nacimiento</span>
            <span><input type="radio" name="Atributo" value="Estado_procedencia"> Estado Procedencia</span>
            <span><input type="radio" name="Atributo" value="Grupo_sanguineo"> Grupo Sanguineo</span>
            <span><input type="radio" name="Atributo" value="Donador_organos"> Donador Organos</span>
            <span><input type="radio" name="Atributo" value="Sexo"> Sexo</span>
            <span><input type="radio" name="Atributo" value="Id_domicilio"> Id Domicilio</span>
        </div>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </form>
</body>
</html>