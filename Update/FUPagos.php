<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'pagos', $_GET['Id'], 'Pagos');
    $Id = $_GET['Id'];

    $sql = "SELECT * FROM Pagos WHERE Linea_captura='$Id';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>

<html>
    <label>Actualizar Pagos</label>
    <br>
    <form method="get" action="UPagos.php">
        <label> Linea_captura</label>
        <input type="number" id= "Linea_captura" name="Linea_captura" value="<?php print($Fila[0]); ?>" required>
        <br>

        <label> Fecha_limite</label>
        <input type="text" id= "Fecha_limite" name="Fecha_limite" value="<?php print($Fila[1]); ?>" required>
        <br>

        <label> Importe</label>
        <input type="number" id= "Importe" name="Importe" step="0.01" min="0" value="<?php print($Fila[2]); ?>" required>
        <br>

        <label> Instrumento</label>
        <input type="text" id= "Instrumento" name="Instrumento" value="<?php print($Fila[3]); ?>" required>
        <br>

        <input type="submit">
    </form>

</html>