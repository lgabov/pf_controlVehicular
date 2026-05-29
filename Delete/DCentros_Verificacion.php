<?php
require_once "../Auth/auth.php";

proteger(["admin"]);


$Numero_centro = $_POST["Numero_centro"];

$sql = "DELETE FROM Centros_Verificacion WHERE Numero_centro = '$Numero_centro';";

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
        print("Error: No se puede eliminar este centro de verificación porque está asignado a una tarjeta de verificación activa.");
    } else {
        print("Error interno en la base de datos: " . $e->getMessage());
    }
} finally {
    Desconectar($Con);
}
?>