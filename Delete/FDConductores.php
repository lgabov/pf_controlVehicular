<?php
require_once "../Auth/auth.php";
proteger(["admin"]);
?>
<html>
    <form method="post" action="DConductores.php">
        <label>Numero_licencia </label>
        <input type="text" name="Numero_licencia" id="Numero_licencia">
        <input type="submit">
    </form>
</html>