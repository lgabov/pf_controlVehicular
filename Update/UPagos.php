<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Linea_captura = $_GET['Linea_captura'];
$Fecha_limite = $_GET['Fecha_limite'];
$Importe = $_GET['Importe'];
$Instrumento = $_GET['Instrumento'];

//Formar sql
$sql = "UPDATE pagos SET Fecha_limite='$Fecha_limite', Importe='$Importe', Instrumento='$Instrumento' WHERE Linea_captura='$Linea_captura'";
//Ejecutar sql
include ('../Controlador.php');
$Con = Conectar();
try {
    $ResultSet = Ejecutar($Con, $sql);
    if (mysqli_affected_rows($Con) > 0) {
        print("Registro actualizado con éxito.");
    } else {
        print("Registro procesado (sin cambios realizados o ID no encontrado).");
    }

} catch (mysqli_sql_exception $e) {

    if ($e->getCode() == 1062) {
        print("Error: No puedes usar ese ID porque ya pertenece a otro registro.");
    } else {
        print("Error interno en la base de datos: " . $e->getMessage());
    }
} finally {
    Desconectar($Con);
}
?>