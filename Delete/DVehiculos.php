<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
$Id = $_POST["Id"];

$sql = "DELETE FROM Vehiculos WHERE Id = '$Id';";

include("../Controlador.php");
$Con = Conectar();
try {
    $ResultSet = Ejecutar($Con, $sql);

    if (mysqli_affected_rows($Con) > 0) {
        print("Registro eliminado con éxito.");
    } else {
        print("Aviso: No se encontró ningún registro con ese ID para eliminar.");
    }

} catch (mysqli_sql_exception $e) {
    if ($e->getCode() == 1451) {
        print("Error: No se puede eliminar este vehículo porque está asignado a un propietario activo.");
    } else {
        print("Error interno en la base de datos: " . $e->getMessage());
    }
} finally {
    Desconectar($Con);
}
?>