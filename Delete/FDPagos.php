<?php
require_once "../Auth/auth.php";
proteger(["admin"]);
?>
<html>
    <form method="post" action="DPagos.php">
        <label>Linea de captura </label>
        <input type="text" name="Linea_captura" id="Linea_captura">
        <input type="submit">
    </form>
</html>