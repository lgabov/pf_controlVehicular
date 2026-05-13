<?php
    $Numero_licencia = $_GET['Numero_licencia'];

    include ('../Controlador.php');
    $sql = "SELECT * FROM conductores WHERE Numero_licencia='$Numero_licencia';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>

<html>
    <label>Actualizar Conductores</label>
    <br>
    <form method="get" action="UConductores.php" >
        <label> Numero_licencia</label>
        <input type="number" id= "Numero_licencia" name="Numero_licencia" value="<?php echo $Fila[0]; ?>" required>
        <br>

        <label> Nombre</label>
        <input type="text" id= "Nombre" name="Nombre" value="<?php echo $Fila[1]; ?>" required>
        <br>

        <label> Apellido_paterno</label>
        <input type="text" id= "Apellido_paterno" name="Apellido_paterno" value="<?php echo $Fila[2]; ?>" required>
        <br>

        <label> Apellido_materno</label>
        <input type="text" id= "Apellido_materno" name="Apellido_materno" value="<?php echo $Fila[3]; ?>" required>
        <br>

        <label> Estado_procedencia</label>
        <input type="text" id= "Estado_procedencia" name="Estado_procedencia" value="<?php echo $Fila[4]; ?>" required>
        <br>

        <label> Fecha_nacimiento</label>
        <input type="text" id= "Fecha_nacimiento" name="Fecha_nacimiento" value="<?php echo $Fila[5]; ?>" required>
        <br>

        <label> Grupo_sanguineo</label>
        <input type="text" id= "Grupo_sanguineo" name="Grupo_sanguineo" value="<?php echo $Fila[6]; ?>" required>
        <br>

        <label> Donador_organos</label>
        <input type="text" id= "Donador_organos" name="Donador_organos" value="<?php echo $Fila[7]; ?>" required>
        <br>

        <label> Sexo</label>
        <input type="text" id= "Sexo" name="Sexo" value="<?php echo $Fila[8]; ?>" required>
        <br>

        <label> Id_domicilio</label>
        <input type="number" id= "Id_domicilio" name="Id_domicilio" value="<?php echo $Fila[9]; ?>" required>
    
        <br>
        <input type="submit">
    </form>

</html>