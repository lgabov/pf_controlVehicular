<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'licencias', $_GET['Id'], 'Licencias');
    $Id = $_GET['Id'];

    $sql = "SELECT * FROM licencias WHERE Id='$Id';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);

    
?>



<html>
    <label>Actualizar Licencias</label>
    <br>
    <form method="post" action="ULicencias.php" >
        <label> Id</label>
        <input type="number" id= "Id" name="Id" value="<?php echo $Fila[0]; ?>" required>
        <br>

        <label> Fecha_expedicion</label>
        <input type="text" id= "Fecha_expedicion" name="Fecha_expedicion" value="<?php echo $Fila[1]; ?>" required>
        <br>

        <label> Fecha_validez</label>
        <input type="text" id= "Fecha_validez" name="Fecha_validez" value="<?php echo $Fila[2]; ?>" required>
        <br>

        <label> Antiguedad</label>
        <input type="text" id= "Antiguedad" name="Antiguedad" value="<?php echo $Fila[3]; ?>" required>
        <br>

        <label> Id_conductor</label>
        <input type="number" id= "Id_conductor" name="Id_conductor" value="<?php echo $Fila[4]; ?>" required>
        <br>

        <label> Id_pago</label>
        <input type="number" id= "Id_pago" name="Id_pago" value="<?php echo $Fila[5]; ?>" required>
        <br>

        <input type="submit">
    </form>

</html>