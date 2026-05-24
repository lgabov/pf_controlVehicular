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

<html>

    <label>Actualizar Vehiculos</label>
    <br>
    <form method="get" action="UVehiculos.php" >
        <label> Id</label>
        <input type="number" id= "Id" name="Id" value="<?php print($Fila[0]); ?>" required>
        <br>

        <label> Anio</label>
        <input type="number" id= "Año" name="Año" value="<?php print($Fila[1]); ?>" required>
        <br>
        
        <label> Placa </label>
        <input type="text" id= "Placa" name="Placa" value="<?php print($Fila[2]); ?>" required>
        <br>
        
        <label> Marca</label>
        <input type="text" id= "Marca" name="Marca" value="<?php print($Fila[3]); ?>" required>
        <br>

        <label> Numero_serie</label>
        <input type="text" id= "Numero_serie" name="Numero_serie" value="<?php print($Fila[4]); ?>" required>
        <br>

        <label> Origen</label>
        <input type="text" id= "Origen" name="Origen" value="<?php print($Fila[5]); ?>" required>
        <br>

        <label> Color</label>
        <input type="text" id= "Color" name="Color" value="<?php print($Fila[6]); ?>" required>
        <br>

        <label> Cilindraje</label>
        <input type="number" id= "Cilindraje" name="Cilindraje" value="<?php print($Fila[7]); ?>" required>
        <br>

        <label> Capacidad</label>
        <input type="number" id= "Capacidad" name="Capacidad" value="<?php print($Fila[8]); ?>" required>
        <br>

        <label> Puertas</label>
        <input type="number" id= "Puertas" name="Puertas" value="<?php print($Fila[9]); ?>" required>
        <br>
        
        <label> Asientos</label>
        <input type="number" id= "Asientos" name="Asientos" value="<?php print($Fila[10]); ?>" required>
        <br>

        <label> Transmision</label>
        <input type="text" id= "Transmision" name="Transmision" value="<?php print($Fila[11]); ?>" required>
        <br>

        <label> Clave_vehicular</label>
        <input type="text" id= "Clave_vehicular" name="Clave_vehicular" value="<?php print($Fila[12]); ?>" maxlength="7" required>
        <br>

        <label> Tipo_combustible</label>
        <input type="text" id= "Tipo_combustible" name="Tipo_combustible" value="<?php print($Fila[13]); ?>" required>
        <br>

        <input type="submit">
    </form>

</html>