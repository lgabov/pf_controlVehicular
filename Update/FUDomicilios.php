<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
    $Id = $_GET['Id'];

    include ('../Controlador.php');
    $sql = "SELECT * FROM domicilios WHERE Id='$Id';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);

    
?>

<html>

    <label>Actualizar Domicilios</label>
    <br>
    <form method="get" action="UDomicilios.php" >
        <label> Id</label>
        <input type="number" id= "Id" name="Id" required value="<?php print($Fila[0]); ?>">
        <br>

        <label> Localidad</label>
        <input type="text" id= "Localidad" name="Localidad" required value="<?php print($Fila[1]); ?>">
        <br>

        <label> Municipio</label>
        <input type="text" id= "Municipio" name="Municipio" required value="<?php print($Fila[2]); ?>">
        <br>

        <label> Entidad_federativa</label>
        <input type="text" id= "Entidad_federativa" name="Entidad_federativa" required value="<?php print($Fila[3]); ?>">
        <br>

        <input type="submit">
    </form>

</html>