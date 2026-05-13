<?php
$Numero_licencia = $_POST["Numero_licencia"];

$sql = "DELETE FROM Conductores WHERE Numero_licencia = '$Numero_licenia';";
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