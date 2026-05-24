<?php
require_once "../Auth/auth.php";

proteger(["admin"]);

    $Id = $_GET['Id'];
    include ('../Controlador.php');
    $Con = Conectar();
    validarExistenciaID($Con, 'propietarios', 'Id', $_GET['Id'], 'Propietarios');
    $sql = "SELECT * FROM propietarios WHERE Id='$Id';";
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Propietario</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="UPropietarios.php" class="insert-form">
        <h2>Actualizar Propietario</h2>

        <label>Id</label>
        <input class="input" type="number" id="Id" name="Id" value="<?php print($Fila[0]); ?>" required>

        <label>Nombre</label>
        <input class="input" type="text" id="Nombre" name="Nombre" value="<?php print($Fila[1]); ?>" required>

        <label>Apellido Paterno</label>
        <input class="input" type="text" id="Apellido_paterno" name="Apellido_paterno" value="<?php print($Fila[2]); ?>" required>

        <label>Apellido Materno</label>
        <input class="input" type="text" id="Apellido_materno" name="Apellido_materno" value="<?php print($Fila[3]); ?>" required>

        <label>RFC</label>
        <input class="input" type="text" id="RFC" name="RFC" maxlength="13" value="<?php print($Fila[4]); ?>" required>

        <label>Fecha Nacimiento</label>
        <input class="input" type="text" id="Fecha_nacimiento" name="Fecha_nacimiento" value="<?php print($Fila[5]); ?>" required>

        <label>Id Domicilio</label>
        <input class="input" type="number" id="Id_domicilio" name="Id_domicilio" value="<?php print($Fila[6]); ?>" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
</body>
</html>