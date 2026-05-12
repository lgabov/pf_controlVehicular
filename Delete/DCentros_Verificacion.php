<?php
$Numero_centro = $_POST["Numero_centro"];

$sql = "DELETE FROM Centros_Verificacion WHERE Numero_centro = '$Numero_centro';";
print($sql);

include("Controlador.php");
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