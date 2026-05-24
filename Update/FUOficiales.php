<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'oficiales','Id', $_GET['Id'], 'Oficiales');
    $Id = $_GET['Id'];

    $sql = "SELECT * FROM Oficiales WHERE Id='$Id';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Oficial</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="UOficiales.php" class="insert-form">
        <h2>Actualizar Oficial</h2>

        <label>Id</label>
        <input class="input" type="number" id="Id" name="Id" value="<?php echo $Fila[0]; ?>" required>

        <label>Nombre</label>
        <input class="input" type="text" id="Nombre" name="Nombre" value="<?php echo $Fila[1]; ?>" required>

        <label>Apellidos</label>
        <input class="input" type="text" id="Apellidos" name="Apellidos" value="<?php echo $Fila[2]; ?>" required>

        <label>Grupo</label>
        <input class="input" type="text" id="Grupo" name="Grupo" value="<?php echo $Fila[3]; ?>" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
</body>
</html>