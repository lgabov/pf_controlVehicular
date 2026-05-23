<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'tarjetas_circulacion','Folio', $_GET['Id'], 'Tarjetas de Circulación');
    $Folio = $_GET['Id'];

    $sql = "SELECT * FROM tarjetas_circulacion WHERE Folio='$Folio';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);

    
?>

<html>
    <label>Actualizar Tarjetas_Circulacion</label>
    <br>
    <form method="get" action="UTarjetas_Circulacion.php">
        <label> Folio</label>
        <input type="number" id= "Folio" name="Folio" value="<?php print($Fila[0]); ?>" required>
        <br>

        <label> Vigencia</label>
        <input type="text" id= "Vigencia" name="Vigencia" value="<?php print($Fila[1]); ?>" required>
        <br>
        
        <label> Oficina</label>
        <input type="text" id= "Oficina" name="Oficina" value="<?php print($Fila[2]); ?>" required>
        <br>

        <label> Operacion</label>
        <input type="text" id= "Operacion" name="Operacion" value="<?php print($Fila[3]); ?>" required>
        <br>

        <label> Movimiento</label>
        <input type="text" id= "Movimiento" name="Movimiento" value="<?php print($Fila[4]); ?>" required>       
        <br>

        <label> Id_vehiculo</label>
        <input type="number" id= "Id_vehiculo" name="Id_vehiculo" value="<?php print($Fila[5]); ?>" required>
        <br>
        
        <label> Id_propietario</label>
        <input type="number" id= "Id_propietario" name="Id_propietario" value="<?php print($Fila[6]); ?>" required>
        <br>

        <label> Id_pago</label>
        <input type="number" id= "Id_pago" name="Id_pago" required value="<?php print($Fila[7]); ?>">
        <br>
        
        <input type="submit">
    </form>

</html>