<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'multas','Folio', $_GET['Id'], 'Multas');
    $Folio = $_GET['Id'];

    $sql = "SELECT * FROM multas WHERE Folio='$Folio';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Multa</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="UMultas.php" class="insert-form">
        <h2>Actualizar Multa</h2>

        <label>Folio</label>
        <input class="input" type="number" id="Folio" name="Folio" value="<?php echo $Fila[0]; ?>" required>

        <label>Fecha</label>
        <input class="input" type="text" id="Fecha" name="Fecha" value="<?php echo $Fila[1]; ?>" required>

        <label>Hora</label>
        <input class="input" type="text" id="Hora" name="Hora" value="<?php echo $Fila[2]; ?>" required>

        <label>Reporte Seccion</label>
        <input class="input" type="text" id="Reporte_seccion" name="Reporte_seccion" value="<?php echo $Fila[3]; ?>" required>

        <label>Nombre Via</label>
        <input class="input" type="text" id="Nombre_via" name="Nombre_via" value="<?php echo $Fila[4]; ?>" required>

        <label>Kilometro</label>
        <input class="input" type="number" id="Kilometro" name="Kilometro" value="<?php echo $Fila[5]; ?>" required>

        <label>Fundamentos</label>
        <input class="input" type="text" id="Fundamentos" name="Fundamentos" value="<?php echo $Fila[6]; ?>" required>

        <label>Observaciones Personal</label>
        <input class="input" type="text" id="Observaciones_personal" name="Observaciones_personal" value="<?php echo $Fila[7]; ?>">

        <label>Observaciones Conductor</label>
        <input class="input" type="text" id="Observaciones_conductor" name="Observaciones_conductor" value="<?php echo $Fila[8]; ?>">

        <label>Id Oficial</label>
        <input class="input" type="number" id="Id_oficial" name="Id_oficial" value="<?php echo $Fila[9]; ?>" required>

        <label>Id Pago</label>
        <input class="input" type="number" id="Id_pago" name="Id_pago" value="<?php echo $Fila[10]; ?>" required>

        <label>Id Propietario</label>
        <input class="input" type="number" id="Id_propietario" name="Id_propietario" value="<?php echo $Fila[11]; ?>" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
</body>
</html>