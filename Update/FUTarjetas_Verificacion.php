<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'tarjetas_verificacion','Folio', $_GET['Id'], 'Tarjetas de Verificación');
    $Folio = $_GET['Id'];

    $sql = "SELECT * FROM tarjetas_verificacion WHERE Folio='$Folio';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Tarjeta de Verificacion</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <form method="get" action="UTarjetas_Verificacion.php" class="insert-form">
        <h2>Actualizar Tarjeta de Verificacion</h2>

        <label>Folio</label>
        <input class="input" type="number" id="Folio" name="Folio" value="<?php print($Fila[0]); ?>" required>

        <label>Tipo Servicio</label>
        <input class="input" type="text" id="Tipo_servicio" name="Tipo_servicio" value="<?php print($Fila[1]); ?>" required>

        <label>Fecha Expedicion</label>
        <input class="input" type="text" id="Fecha_expedicion" name="Fecha_expedicion" value="<?php print($Fila[2]); ?>" required>

        <label>Motivo</label>
        <input class="input" type="text" id="Motivo" name="Motivo" value="<?php print($Fila[3]); ?>" required>

        <label>Semestre</label>
        <input class="input" type="number" id="Semestre" name="Semestre" value="<?php print($Fila[4]); ?>" required>

        <label>Vigencia</label>
        <input class="input" type="text" id="Vigencia" name="Vigencia" value="<?php print($Fila[5]); ?>" required>

        <label>Linea Vigencia</label>
        <input class="input" type="text" id="Linea_vigencia" name="Linea_vigencia" value="<?php print($Fila[6]); ?>">

        <label>Tecnico Verificador</label>
        <input class="input" type="text" id="Tecnico_verificador" name="Tecnico_verificador" value="<?php print($Fila[7]); ?>" required>

        <label>Numero Centro</label>
        <input class="input" type="number" id="Numero_centro" name="Numero_centro" value="<?php print($Fila[8]); ?>" required>

        <label>Id Pago</label>
        <input class="input" type="number" id="Id_pago" name="Id_pago" value="<?php print($Fila[9]); ?>" required>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
    </form>
</body>
</html>