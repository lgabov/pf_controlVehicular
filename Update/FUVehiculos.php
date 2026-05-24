<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'vehiculos','Id', $_GET['Id'], 'Vehículos');
    $Id = $_GET['Id'];

    $sql = "SELECT * FROM vehiculos WHERE Id='$Id';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Vehiculo</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="UVehiculos.php" class="insert-form">
        <h2>Actualizar Vehiculo</h2>

        <label>Id</label>
        <input class="input" type="number" id="Id" name="Id" value="<?php print($Fila[0]); ?>" required>

        <label>Anio</label>
        <input class="input" type="number" id="Año" name="Año" value="<?php print($Fila[1]); ?>" required>

        <label>Placa</label>
        <input class="input" type="text" id="Placa" name="Placa" value="<?php print($Fila[2]); ?>" required>

        <label>Marca</label>
        <input class="input" type="text" id="Marca" name="Marca" value="<?php print($Fila[3]); ?>" required>

        <label>Numero Serie</label>
        <input class="input" type="text" id="Numero_serie" name="Numero_serie" value="<?php print($Fila[4]); ?>" required>

        <label>Origen</label>
        <input class="input" type="text" id="Origen" name="Origen" value="<?php print($Fila[5]); ?>" required>

        <label>Color</label>
        <input class="input" type="text" id="Color" name="Color" value="<?php print($Fila[6]); ?>" required>

        <label>Cilindraje</label>
        <input class="input" type="number" id="Cilindraje" name="Cilindraje" value="<?php print($Fila[7]); ?>" required>

        <label>Capacidad</label>
        <input class="input" type="number" id="Capacidad" name="Capacidad" value="<?php print($Fila[8]); ?>" required>

        <label>Puertas</label>
        <input class="input" type="number" id="Puertas" name="Puertas" value="<?php print($Fila[9]); ?>" required>

        <label>Asientos</label>
        <input class="input" type="number" id="Asientos" name="Asientos" value="<?php print($Fila[10]); ?>" required>

        <label>Transmision</label>
        <input class="input" type="text" id="Transmision" name="Transmision" value="<?php print($Fila[11]); ?>" required>

        <label>Clave Vehicular</label>
        <input class="input" type="text" id="Clave_vehicular" name="Clave_vehicular" value="<?php print($Fila[12]); ?>" maxlength="7" required>

        <label>Tipo Combustible</label>
        <input class="input" type="text" id="Tipo_combustible" name="Tipo_combustible" value="<?php print($Fila[13]); ?>" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
</body>
</html>