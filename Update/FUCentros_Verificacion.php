<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'centros_verificacion','Numero_centro', $_GET['Id'], 'Centros de Verificación');
    $Numero_centro = $_GET['Id'];
    $sql = "SELECT * FROM centros_verificacion WHERE Numero_centro='$Numero_centro';";
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);

    
?>

<html>
    <label>Actualizar Centros de Verificacion</label>
    <br>
    <form method="get" action="UCentros_Verificacion.php">
        <label> Numero_centro </label>
        <input type="number" id= "Numero_centro" name="Numero_centro" required value="<?php print($Fila[0]); ?>">
        <br>
        <label> Hora_entrada</label>
        <input type="text" id= "Hora_entrada" name="Hora_entrada" required value="<?php print($Fila[1]); ?>">
        <br>
        <label> Hora_salida</label>
        <input type="text" id= "Hora_salida" name="Hora_salida" required value="<?php print($Fila[2]); ?>">
        <br>
        <input type="submit">
    </form>

</html>