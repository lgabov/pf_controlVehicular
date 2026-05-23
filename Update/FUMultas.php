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


<html>

    <label>Actualizar Multas</label>s
    <br>
    <form method="get" action="UMultas.php">
        <label> Folio</label>
        <input type="number" id= "Folio" name="Folio" value="<?php echo $Fila[0]; ?>" required>
        <br>
        
        <label> Fecha</label>
        <input type="text" id= "Fecha" name="Fecha" value="<?php echo $Fila[1]; ?>" required>
        <br>

        <label> Hora</label>
        <input type="text" id= "Hora" name="Hora" value="<?php echo $Fila[2]; ?>" required>
        <br>

        <label> Reporte_seccion</label>
        <input type="text" id= "Reporte_seccion" name="Reporte_seccion" value="<?php echo $Fila[3]; ?>" required>
        <br>

        <label> Nombre_via</label>
        <input type="text" id= "Nombre_via" name="Nombre_via" value="<?php echo $Fila[4]; ?>" required>
        <br>

        <label> Kilometro</label>
        <input type="number" id= "Kilometro" name="Kilometro" value="<?php echo $Fila[5]; ?>" required>
        <br>

        <label> Fundamentos</label>
        <input type="text" id= "Fundamentos" name="Fundamentos" value="<?php echo $Fila[6]; ?>" required>
        <br>

        <label> Observaciones_personal</label>
        <input type="text" id= "Observaciones_personal" name="Observaciones_personal" value="<?php echo $Fila[7]; ?>" required>
        <br>

        <label> Observaciones_conductor</label>
        <input type="text" id= "Observaciones_conductor" name="Observaciones_conductor" value="<?php echo $Fila[8]; ?>" required>
        <br>

        <label> Id_oficial</label>
        <input type="number" id= "Id_oficial" name="Id_oficial" value="<?php echo $Fila[9]; ?>" required>
        <br>

        <label> Id_pago</label>
        <input type="number" id= "Id_pago" name="Id_pago" value="<?php echo $Fila[10]; ?>" required>
        <br>

        <input type="submit">
    </form>

</html>