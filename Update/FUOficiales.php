<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'oficiales', $_GET['Id'], 'Oficiales');
    $Id = $_GET['Id'];

    $sql = "SELECT * FROM Oficiales WHERE Id='$Id';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);

    
?>

<html>
    <label>Actualizar Oficiales</label>
    <br>
    <form method="get" action="UOficiales.php">
        <label> Id</label>
        <input type="number" id= "Id" name="Id" value="<?php echo $Fila[0]; ?>" required>
        <br>
        
        <label> Nombre</label>
        <input type="text" id= "Nombre" name="Nombre" value="<?php echo $Fila[1]; ?>" required>
        <br>

        <label> Apellidos</label>
        <input type="text" id= "Apellidos" name="Apellidos" value="<?php echo $Fila[2]; ?>" required>
        <br>

        <label> Grupo</label>
        <input type="text" id= "Grupo" name="Grupo" value="<?php echo $Fila[3]; ?>" required>
        <br>

        <input type="submit">
    </form>

</html>