<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<html>
    <label>Oficiales</label>
    <br>
    <form method="post" action="IOficiales.php">
        <label> Id</label>
        <input type="number" id= "Id" name="Id" required>
        <br>
        
        <label> Nombre</label>
        <input type="text" id= "Nombre" name="Nombre" required>
        <br>

        <label> Apellidos</label>
        <input type="text" id= "Apellidos" name="Apellidos" required>
        <br>

        <label> Grupo</label>
        <input type="text" id= "Grupo" name="Grupo" required>
        <br>

        <input type="submit">
    </form>

</html>