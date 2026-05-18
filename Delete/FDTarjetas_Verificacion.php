<?php
require_once "../Auth/auth.php";
proteger(["admin"]);
?>
<html>
    <form method="post" action="DTarjetas_Verificacion.php">
        <label>Folio </label>
        <input type="text" name="Folio" id="Folio">
        <input type="submit">
        
    </form>
</html>