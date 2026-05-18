<?php
require_once "../Auth/auth.php";
proteger(["admin"]);
?>
<html>
    <form method="post" action="DDomicilios.php">
        <label>Id </label>
        <input type="text" name="Id" id="Id">
        <input type="submit">
    </form>
</html>