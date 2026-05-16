<?php
$Linea_captura = $_POST["Linea_captura"];

$sql = "DELETE FROM Pagos WHERE Linea_captura = '$Linea_captura';";
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
Desconectar($Con);
?>