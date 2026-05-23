<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Folio = $_REQUEST['Folio'];
$Vigencia = $_REQUEST['Vigencia'];
$Oficina = $_REQUEST['Oficina'];
$Operacion = $_REQUEST['Operacion'];
$Movimiento = $_REQUEST['Movimiento'];
$Id_vehiculo = $_REQUEST['Id_vehiculo'];
$Id_propietario = $_REQUEST['Id_propietario'];
$Id_pago = $_REQUEST['Id_pago'];

//Formar sql
$sql = "UPDATE tarjetas_circulacion SET Vigencia='$Vigencia', Oficina='$Oficina', Operacion='$Operacion', Movimiento='$Movimiento', Id_vehiculo='$Id_vehiculo', Id_propietario='$Id_propietario', Id_pago='$Id_pago' WHERE Folio='$Folio'";
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