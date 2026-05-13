<?php
    $Folio = $_GET['Folio'];

    include ('../Controlador.php');
    $sql = "SELECT * FROM tarjetas_verificacion WHERE Folio='$Folio';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);

    
?>

<html>
    <label>Actualizar Tarjetas de Verificacion</label>
    <br>
    <form method="get" action="UTarjetas_Verificacion.php">
        <label> Folio</label>
        <input type="number" id= "Folio" name="Folio" value="<?php print($Fila[0]); ?>" required>
        <br>

        <label> Tipo_servicio</label>
        <input type="text" id= "Tipo_servicio" name="Tipo_servicio" value="<?php print($Fila[1]); ?>" required>
        <br>
    
        <label> Fecha_expedicion</label>
        <input type="text" id= "Fecha_expedicion" name="Fecha_expedicion" value="<?php print($Fila[2]); ?>" required>
        <br>

        <label> Motivo</label>
        <input type="text" id= "Motivo" name="Motivo" value="<?php print($Fila[3]); ?>" required>
        <br>

        <label> Semestre</label>
        <input type="number" id= "Semestre" name="Semestre" value="<?php print($Fila[4]); ?>" required>
        <br>

        <label> Vigencia</label>
        <input type="text" id= "Vigencia" name="Vigencia" value="<?php print($Fila[5]); ?>" required>
        <br>
        
        <label> Linea_vigencia</label>
        <input type="text" id= "Linea_vigencia" name="Linea_vigencia" value="<?php print($Fila[6]); ?>">
        <br>

        <label> Tecnico_verificador</label>
        <input type="text" id= "Tecnico_verificador" name="Tecnico_verificador" value="<?php print($Fila[7]); ?>" required>
        <br>

        <label> Numero_centro</label>
        <input type="number" id= "Numero_centro" name="Numero_centro" value="<?php print($Fila[8]); ?>" required>
        <br>

        <label> Id_pago</label>
        <input type="number" id= "Id_pago" name="Id_pago" value="<?php print($Fila[9]); ?>" required>
        <br>

        <input type="submit">
    </form>

</html>
