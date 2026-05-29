<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Id = $_GET['Id'];
$Nombre  = $_GET['Nombre'];
$Apellidos = $_GET['Apellidos'];
$Grupo = $_GET['Grupo'];

//Formar sql
$sql = "UPDATE Oficiales SET Nombre='$Nombre', Apellidos='$Apellidos', Grupo='$Grupo' WHERE Id='$Id'";
//Ejecutar sql
include ('../Controlador.php');
$Con = Conectar();
print("SQL: $sql<br>"); // Debug: Mostrar la consulta SQL que se va a ejecutar
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