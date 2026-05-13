<?php
    $Id = $_GET['Id'];

    include ('../Controlador.php');
    $sql = "SELECT * FROM propietarios WHERE Id='$Id';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);  
?>

<html>

    <label>Actualizar Propietarios</label>
    <br>
    <form method="get" action="UPropietarios.php">
        <label> Id</label>
        <input type="number" id= "Id" name="Id" value="<?php print($Fila[0]); ?>" required>
        <br>

        <label> Nombre</label>
        <input type="text" id= "Nombre" name="Nombre" value="<?php print($Fila[1]); ?>" required>
        <br>


        <label> Apellido_paterno</label>
        <input type="text" id= "Apellido_paterno" name="Apellido_paterno" value="<?php print($Fila[2]); ?>" required>
        <br>

        <label> Apellido_materno</label>
        <input type="text" id= "Apellido_materno" name="Apellido_materno" value="<?php print($Fila[3]); ?>" required>
        <br>

        <label> RFC</label>
        <input type="text" id= "RFC" name="RFC" maxlength="13" value="<?php print($Fila[4]); ?>" required>
        <br>

        <label> Fecha_nacimiento</label>
        <input type="text" id= "Fecha_nacimiento" name="Fecha_nacimiento" value="<?php print($Fila[5]); ?>" required>
        <br>
        
        <label> Id_domicilio</label>
        <input type="number" id= "Id_domicilio" name="Id_domicilio" value="<?php print($Fila[6]); ?>" required>
        <br>
        
        <input type="submit">
    </form>

</html>