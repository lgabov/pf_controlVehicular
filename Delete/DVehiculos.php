<?php
$Id = $_POST["Id"];

$sql = "DELETE FROM Vehiculos WHERE Id = '$Id';";
print($sql);

include("../Controlador.php");
$Con = Conectar();
$ResultSet = Ejecutar($Con, $sql);
$FilasAfectadas = mysqli_affected_rows($Con);

if($FilasAfectadas == 1) {
    print("1 Registro eliminado");
} else {
    print("0 registros eliminados");
}
printr($ResultSet);
Deconectar($Con);
?>