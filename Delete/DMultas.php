<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
$Folio = $_POST["Folio"];

$sql = "DELETE FROM Multas WHERE Folio = '$Folio';";
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