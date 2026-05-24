<?php
require_once "../Auth/auth.php";

proteger(["admin", "user"]);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ver Centros de Verificación</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>

<body>
    <form method="get" action="SCentros_Verificacion.php" class="select-form">
        <label> Criterio </label>
        <input class="input" type="text" id="Criterio" name="Criterio">

        <label>Atributo </label>
        <input type="radio" id="Atributo" name="Atributo" value="Numero_Centro"> Numero Centro 
        <input type="radio" id="Atributo" name="Atributo" value="Hora_entrada"> Hora Entrada
        <input type="radio" id="Atributo" name="Atributo" value="Hora_salida"> Hora Salida

 
        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </form>
</body>
</html>