<?php
require_once "../Auth/auth.php";
proteger(["admin"]);
?>
<html>

    <label>Propietarios</label>
    <br>
    <form method="get" action="IPropietarios.php">
        <label> Id</label>
        <input type="number" id= "Id" name="Id" required>
        <br>

        <label> Fecha_nacimiento</label>
        <input type="date" id= "Fecha_nacimiento" name="Fecha_nacimiento" required>
        <br>

        <label> Nombre</label>
        <input type="text" id= "Nombre" name="Nombre" required>
        <br>

        <label> RFC</label>
        <input type="text" id= "RFC" name="RFC" maxlength="13" required>
        <br>

        <label> Apellido_paterno</label>
        <input type="text" id= "Apellido_paterno" name="Apellido_paterno" required>
        <br>

        <label> Apellido_materno</label>
        <input type="text" id= "Apellido_materno" name="Apellido_materno" required>
        <br>
        
        <label> Id_domicilio</label>
        <input type="number" id= "Id_domicilio" name="Id_domicilio" required>
        <br>
        
        <input type="submit">
    </form>

</html>