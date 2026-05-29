<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Numero_centro = $_GET['Numero_centro'];
$Hora_entrada = $_GET['Hora_entrada'];
$Hora_salida = $_GET['Hora_salida'];

//Formar sql
$sql = "UPDATE Centros_Verificacion SET Hora_entrada='$Hora_entrada', Hora_salida='$Hora_salida' WHERE Numero_centro='$Numero_centro';";
//Ejecutar sql
include ('../Controlador.php');
$Con = Conectar();
try {
    $ResultSet = Ejecutar($Con, $sql);
    if (mysqli_affected_rows($Con) > 0) {
        echo "Registro actualizado con éxito. Redirigiendo...";
        echo '<meta http-equiv="refresh" content="3;url=../Auth/MenuAdmin.php">';
        exit();
        
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