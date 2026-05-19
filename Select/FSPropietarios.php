
<?php
require_once "../Auth/auth.php";
proteger(["admin", "user"]);
?>
<html>
    <form method="get" action="SPropietarios.php">
        <label>Criterio </label>
        <input type="text" id="Criterio" name="Criterio">

        <br>
        <label>Atributo </label>
        <input type="radio" id="Atributo" name="Atributo" value="Id"> Id
        <input type="radio" id="Atributo" name="Atributo" value="Nombre"> Nombre
        <input type="radio" id="Atributo" name="Atributo" value="Apellido_paterno"> Apellido paterno
        <input type="radio" id="Atributo" name="Atributo" value="Apellido_materno"> Apellido materno
        <input type="radio" id="Atributo" name="Atributo" value="RFC"> RFC
        <input type="radio" id="Atributo" name="Atributo" value="Fecha_nacimiento"> Fecha de nacimiento
        <input type="radio" id="Atributo" name="Atributo" value="Id_domicilio"> Id Domicilio
        <input type="submit">
    </form>
</html>