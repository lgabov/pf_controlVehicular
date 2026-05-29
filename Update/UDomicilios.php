<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Id = $_GET['Id'];
$localidad = $_GET['Localidad'];
$municipio = $_GET['Municipio'];
$entidad_federativa = $_GET['Entidad_federativa'];

//Formar sql
$sql = "UPDATE domicilios SET Localidad='$localidad', Municipio='$municipio', Entidad_federativa='$entidad_federativa' WHERE Id='$Id'";
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