<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Folio = $_GET['Folio'];
$Fecha = $_GET['Fecha'];
$Hora = $_GET['Hora'];
$Reporte_seccion = $_GET['Reporte_seccion'];
$Nombre_via = $_GET['Nombre_via'];
$Kilometro = $_GET['Kilometro'];
$Fundamentos = $_GET['Fundamentos'];
$Observaciones_personal = $_GET['Observaciones_personal'];
$Observaciones_conductor = $_GET['Observaciones_conductor'];
$Id_oficial = $_GET['Id_oficial'];
$Id_pago = $_GET['Id_pago'];
$Id_propietario = $_GET['Id_propietario'];

//Formar sql
$sql = "UPDATE multas SET Fecha='$Fecha', Hora='$Hora', Reporte_seccion='$Reporte_seccion', Nombre_via='$Nombre_via', Kilometro='$Kilometro', Fundamentos='$Fundamentos', Observaciones_personal='$Observaciones_personal', Observaciones_conductor='$Observaciones_conductor', Id_oficial='$Id_oficial', Id_pago='$Id_pago', Id_propietario='$Id_propietario' WHERE Folio='$Folio'";
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