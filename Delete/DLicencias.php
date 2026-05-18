<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
$Id = $_POST["Id"];

$sql = "DELETE FROM Licencias WHERE Id = '$Id';";
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