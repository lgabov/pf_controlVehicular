<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
$Id = $_POST["Id"];

$sql = "DELETE FROM Domicilios WHERE Id = '$Id';";

include("../Controlador.php");
$Con = Conectar();
try {
    $ResultSet = Ejecutar($Con, $sql);

    if (mysqli_affected_rows($Con) > 0) {
        echo "<script>
            alert('Registro eliminado con éxito.');
            window.location.href = '../Auth/MenuAdmin.php';
          </script>";
    exit();
    } else {
        print("Aviso: No se encontró ningún registro con ese ID para eliminar.");
    }

} catch (mysqli_sql_exception $e) {
    if ($e->getCode() == 1451) {
        print("Error: No se puede eliminar este domicilio porque está asignado a un conductor activo.");
    } else {
        print("Error interno en la base de datos: " . $e->getMessage());
    }
} finally {
    Desconectar($Con);
}
?>