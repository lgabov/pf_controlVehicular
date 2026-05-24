<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'domicilios','Id', $_GET['Id'], 'Domicilios');
    $Id = $_GET['Id'];

    $sql = "SELECT * FROM domicilios WHERE Id='$Id';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Domicilio</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="UDomicilios.php" class="insert-form">
        <h2>Actualizar Domicilio</h2>

        <label>Id</label>
        <input class="input" type="number" id="Id" name="Id" required value="<?php print($Fila[0]); ?>">

        <label>Localidad</label>
        <input class="input" type="text" id="Localidad" name="Localidad" required value="<?php print($Fila[1]); ?>">

        <label>Municipio</label>
        <input class="input" type="text" id="Municipio" name="Municipio" required value="<?php print($Fila[2]); ?>">

        <label>Entidad Federativa</label>
        <input class="input" type="text" id="Entidad_federativa" name="Entidad_federativa" required value="<?php print($Fila[3]); ?>">

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
</body>
</html>